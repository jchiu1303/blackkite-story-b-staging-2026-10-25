# Query pattern and CSS append

Cite **t67u · t63u**. claim_ge_99=false. Staging page **3188** only. This note is the pattern. It is not a paste for page 4 and not an apply script.

The checked-in renderer is `bk_render_newly_released_strip()` in `mu-plugins/bk-release-date.php`. The shortcode is `[bk_newly_released]`. Limit is hard-capped at 3.

## Why PHP markup, not a Query Loop

A block Query Loop or `[products]` grid repeats one card template. Pitch-c does not. The look is one eyebrow and a `hero2` split:

- Newest release: `article.promo-card.hero-card`
- Second and third: `article.promo-card` inside `.side-stack`

That split is what the existing pitch-c / hero2 CSS sizes (large hero, smaller pair). A uniform product grid would drop the look unless the block markup itself emitted these classes. The scaffold emits these classes from the query. A Query Loop stays a fallback only if a later staging pass shows it can emit this same tree.

Hero size follows **position** (`.hero-card`), not an `iron-goddess` filename. A newer dated product can take the hero slot without a hand edit.

## Query

Published `product` posts only. Meta key `bk_release_date`, non-empty, type DATE. Order by that date descending, then ID descending when two dates match. `posts_per_page` 3. No padding with undated products.

```php
$args = array(
    'post_type'              => 'product',
    'post_status'            => 'publish',
    'posts_per_page'         => 3,
    'ignore_sticky_posts'    => true,
    'no_found_rows'          => true,
    'meta_query'             => array(
        'relation' => 'AND',
        'bk_release_clause' => array(
            'key'     => 'bk_release_date',
            'value'   => '',
            'compare' => '!=',
            'type'    => 'DATE',
        ),
    ),
    'orderby'                => array(
        'bk_release_clause' => 'DESC',
        'ID'                => 'DESC',
    ),
);
```

Shop catalog order (newest post date first) is a different sort. This strip does not use it.

Output shape the renderer builds (placeholders, not a page paste):

```html
<div class="canwrap promo pitch-c">
  <p class="promo-eyebrow">Newly released.</p>
  <div class="hero2">
    <article class="promo-card hero-card">
      <a href="{permalink}"><img alt="{name}" src="{featured-image}"><span class="promo-name">{name}</span></a>
    </article>
    <div class="side-stack">
      <article class="promo-card"><a href="{permalink}">…</a></article>
      <article class="promo-card"><a href="{permalink}">…</a></article>
    </div>
  </div>
</div>
```

One dated product omits `.side-stack`. Two dated products leave a single side card. Zero dated products leave the eyebrow and an empty `hero2` so the page does not invent Iron Goddess, Flower Market, or Heron. Set those three dates on staging before the static HTML is removed.

There is one eyebrow, “Newly released.” Cards do not repeat a per-SKU sell line.

## CSS append (bk-wp-apply-standing)

`css/newly-released-3188.append.css` is a **new block for the end** of Additional CSS, scoped to `body.page-id-3188`.

- Append it. Do not wipe, replace, or reorder the Customizer chain already in the box.
- If the staging apply path has to disable CodeMirror, disable it and still append. Do not select-all the existing CSS.
- Do not paste this file onto page 4. Page 4 already has its own pitch-c rules inside the live chain. Those rules stay where they are. This trail does not re-ship them and does not retarget them.
- Film, BOGOF, scrim, and chapter CSS are out of this file on purpose.

Later staging insert of the shortcode (or a template call) is a separate Jon GO for page 3188. This note does not perform it.
