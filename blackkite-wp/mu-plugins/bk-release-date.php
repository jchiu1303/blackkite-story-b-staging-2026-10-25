<?php
/**
 * Plugin Name: Black Kite Release Date
 * Description: Staging scaffold for bk_release_date and a 3-up Newly released strip. Not an apply. Do not push, paste, or APPLY to live WordPress or page 4 (t67u · t63u).
 * Version: 0.1.0
 * Author: Black Kite story-b trail
 * Requires at least: 6.0
 *
 * Drop-in later, staging only: copy this file to wp-content/mu-plugins/bk-release-date.php
 * (mu-plugins load files in that directory, not in subfolders). A child theme may require
 * this same file from functions.php. This repo checkout does not install it.
 *
 * TODO: WP Admin must confirm no existing release-date meta/ACF key before install.
 * If one exists, reuse it. Do not register a second field.
 *
 * Cite t67u · t63u. claim_ge_99=false. Strip limit 3. Staging page 3188 only.
 */

defined('ABSPATH') || exit;

const BK_RELEASE_DATE_META  = 'bk_release_date';
const BK_RELEASE_DATE_LIMIT = 3;

/**
 * Accept only YYYY-MM-DD. Empty clears the field. Overflow dates (2026-02-31) fail.
 *
 * @param mixed $value Raw meta or form value.
 * @return string
 */
function bk_sanitize_release_date($value) {
    if (!is_string($value)) {
        return '';
    }
    $value = trim($value);
    if ($value === '') {
        return '';
    }
    $dt = DateTime::createFromFormat('!Y-m-d', $value);
    $errors = DateTime::getLastErrors();
    if (!$dt || ($errors && ($errors['warning_count'] > 0 || $errors['error_count'] > 0))) {
        return '';
    }
    if ($dt->format('Y-m-d') !== $value) {
        return '';
    }
    return $value;
}

add_action('init', function () {
    register_post_meta('product', BK_RELEASE_DATE_META, array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => true,
        'sanitize_callback' => 'bk_sanitize_release_date',
        'auth_callback'     => function () {
            return current_user_can('edit_products');
        },
    ));
});

/**
 * Classic and block-editor meta box. Native date input is the picker.
 */
add_action('add_meta_boxes_product', function () {
    // Block editor uses the sidebar panel below. One picker, not two.
    if (function_exists('use_block_editor_for_post_type') && use_block_editor_for_post_type('product')) {
        return;
    }
    add_meta_box(
        'bk_release_date',
        'Release date',
        'bk_release_date_metabox',
        'product',
        'side',
        'high'
    );
});

/**
 * @param WP_Post $post Product post.
 */
function bk_release_date_metabox($post) {
    wp_nonce_field('bk_release_date_save', 'bk_release_date_nonce');
    $value = get_post_meta($post->ID, BK_RELEASE_DATE_META, true);
    if (!is_string($value)) {
        $value = '';
    }
    echo '<p><label for="bk_release_date"><strong>Release date</strong></label></p>';
    printf(
        '<input type="date" id="bk_release_date" name="bk_release_date" value="%s" />',
        esc_attr($value)
    );
    echo '<p class="description">YYYY-MM-DD. Staging “Newly released” keeps the 3 newest dates. Leave empty to omit this product. Do not use this field to edit live page 4 (t67u).</p>';
}

add_action('save_post_product', function ($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Block-editor saves go through registered post meta. Do not let an empty
    // classic form field wipe a REST write.
    if (defined('REST_REQUEST') && REST_REQUEST) {
        return;
    }
    if (!isset($_POST['bk_release_date_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['bk_release_date_nonce'])), 'bk_release_date_save')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    $raw = isset($_POST['bk_release_date']) ? wp_unslash($_POST['bk_release_date']) : '';
    $clean = bk_sanitize_release_date(is_string($raw) ? $raw : '');
    if ($clean === '') {
        delete_post_meta($post_id, BK_RELEASE_DATE_META);
        return;
    }
    update_post_meta($post_id, BK_RELEASE_DATE_META, $clean);
});

/**
 * Sidebar date picker when the product block editor hides meta boxes.
 * Same meta key as the meta box.
 */
add_action('enqueue_block_editor_assets', function () {
    if (!function_exists('get_current_screen')) {
        return;
    }
    $screen = get_current_screen();
    if (!$screen || $screen->post_type !== 'product') {
        return;
    }
    wp_enqueue_script('wp-edit-post');
    wp_enqueue_script('wp-plugins');
    wp_enqueue_script('wp-element');
    wp_enqueue_script('wp-data');
    wp_add_inline_script('wp-edit-post', bk_release_date_panel_js());
});

/**
 * @return string
 */
function bk_release_date_panel_js() {
    $key = wp_json_encode(BK_RELEASE_DATE_META);
    return <<<JS
(function (wp) {
  if (!wp || !wp.plugins || !wp.element || !wp.data) {
    return;
  }
  var Panel = (wp.editPost && wp.editPost.PluginDocumentSettingPanel)
    || (wp.editor && wp.editor.PluginDocumentSettingPanel);
  if (!Panel) {
    return;
  }
  var el = wp.element.createElement;
  var useSelect = wp.data.useSelect;
  var useDispatch = wp.data.useDispatch;
  var metaKey = {$key};

  function ReleaseDatePanel() {
    var value = useSelect(function (select) {
      var meta = select('core/editor').getEditedPostAttribute('meta') || {};
      return meta[metaKey] || '';
    }, []);
    var editPost = useDispatch('core/editor').editPost;

    return el(
      Panel,
      { name: 'bk-release-date', title: 'Release date', className: 'bk-release-date-panel' },
      el('p', { style: { marginTop: 0 } }, 'YYYY-MM-DD. Staging strip keeps the 3 newest. Empty omits the product.'),
      el('input', {
        type: 'date',
        value: value,
        onChange: function (event) {
          var next = {};
          next[metaKey] = event.target.value;
          editPost({ meta: next });
        }
      })
    );
  }

  wp.plugins.registerPlugin('bk-release-date', {
    render: ReleaseDatePanel,
    icon: 'calendar-alt'
  });
})(window.wp);
JS;
}

add_filter('manage_edit-product_columns', function ($columns) {
    $next = array();
    foreach ($columns as $key => $label) {
        $next[$key] = $label;
        if ($key === 'name') {
            $next['bk_release_date'] = 'Release date';
        }
    }
    if (!isset($next['bk_release_date'])) {
        $next['bk_release_date'] = 'Release date';
    }
    return $next;
});

add_action('manage_product_posts_custom_column', function ($column, $post_id) {
    if ($column !== 'bk_release_date') {
        return;
    }
    $value = get_post_meta($post_id, BK_RELEASE_DATE_META, true);
    echo $value ? esc_html($value) : '—';
}, 10, 2);

/**
 * Published products with a non-empty release date, newest date first, cap 3.
 *
 * @return WC_Product[]
 */
function bk_newly_released_products() {
    if (!function_exists('wc_get_product')) {
        return array();
    }

    $args = array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'posts_per_page'      => BK_RELEASE_DATE_LIMIT,
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
        'fields'              => 'ids',
        'meta_query'          => array(
            'relation'          => 'AND',
            'bk_release_clause' => array(
                'key'     => BK_RELEASE_DATE_META,
                'value'   => '',
                'compare' => '!=',
                'type'    => 'DATE',
            ),
        ),
        'orderby'             => array(
            'bk_release_clause' => 'DESC',
            'ID'                => 'DESC',
        ),
    );

    $query = new WP_Query($args);
    $products = array();
    foreach ($query->posts as $product_id) {
        $product = wc_get_product($product_id);
        if ($product instanceof WC_Product) {
            $products[] = $product;
        }
        if (count($products) >= BK_RELEASE_DATE_LIMIT) {
            break;
        }
    }
    wp_reset_postdata();
    return $products;
}

/**
 * Pitch-c / hero2 tree. First product is the hero card. Next two are the side stack.
 * Fewer than three dates yields fewer cards. Zero dates yields the eyebrow and an empty hero2.
 *
 * @return string
 */
function bk_render_newly_released_strip() {
    $products = bk_newly_released_products();
    $count = count($products);

    ob_start();
    echo '<div class="canwrap promo pitch-c">';
    echo '<p class="promo-eyebrow">Newly released.</p>';
    echo '<div class="hero2">';
    echo '<!-- bk-newly-released count: ' . (int) $count . ' limit: ' . (int) BK_RELEASE_DATE_LIMIT . ' -->';

    if ($count > 0) {
        echo bk_newly_released_card($products[0], true);
    }
    if ($count > 1) {
        echo '<div class="side-stack">';
        for ($i = 1; $i < $count; $i++) {
            echo bk_newly_released_card($products[$i], false);
        }
        echo '</div>';
    }

    echo '</div></div>';
    return (string) ob_get_clean();
}

/**
 * @param WC_Product $product Product in the strip.
 * @param bool       $hero    True for the newest date.
 * @return string
 */
function bk_newly_released_card($product, $hero) {
    $name = $product->get_name();
    $class = $hero ? 'promo-card hero-card' : 'promo-card';
    $image_id = (int) $product->get_image_id();
    $alt = $name;
    if ($image_id) {
        $stored_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
        if (is_string($stored_alt) && $stored_alt !== '') {
            $alt = $stored_alt;
        }
    }

    $html = '<article class="' . esc_attr($class) . '">';
    $html .= '<a href="' . esc_url($product->get_permalink()) . '">';
    if ($image_id) {
        $html .= wp_get_attachment_image($image_id, 'full', false, array(
            'alt'      => $alt,
            'loading'  => $hero ? 'eager' : 'lazy',
            'decoding' => 'async',
        ));
    }
    $html .= '<span class="promo-name">' . esc_html($name) . '</span>';
    $html .= '</a></article>';
    return $html;
}

add_shortcode('bk_newly_released', function () {
    return bk_render_newly_released_strip();
});
