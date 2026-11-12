# blackkite-wp

Code trail for Black Kite Card 2: staff upload a WooCommerce product, set a release date, and the landing “Newly released” strip follows that date.

Cite **t67u · t63u**. Widget **t63s461**. Jon GO t63u locked Card 2, repo B, and strip limit **3**. claim_ge_99=false.

This folder does not change the GitHub Pages story-b preview. `index.html` and `assets/` stay the design preview (single Iron Goddess promo plus three chapters). The WordPress strip is a different surface.

## Hard lock (t67u · t63u)

NO push, paste, or APPLY to live WordPress or page 4. Staging page **3188** only until a separate explicit Jon GO.

This PR does not install the plugin, does not edit a WordPress page, and does not add a prod apply script or page-4 paste steps. Checking files into git is not an apply.

## Staging first

- Later target: staging WordPress page **3188** only.
- Strip shows **3** products, ordered by release date descending. Show fewer if fewer than three products have a date. Never invent products. Not 8.
- Proposed meta key: `bk_release_date`, stored as `YYYY-MM-DD`.
- **TODO (WP Admin, read-only, before any staging install):** confirm the product edit screen has no existing release-date field (core custom field, ACF, or another meta key). If one exists, reuse it and do not register a second key. The scaffold assumes `bk_release_date` only because the inventory did not find one.

## What is here

| Path | Role |
| --- | --- |
| `DONE_SPEC.md` | Frozen t63u done-when, plus the t67u hard lock |
| `ORDER.md` | Frozen t63u order, plus the t67u hard lock |
| `sop/staff-new-release.md` | Staff path once staging is actually wired |
| `notes/inventory-static-strip.md` | Static HTML finding and the strip=3 resolution |
| `notes/query-and-css-append.md` | Why the renderer is PHP, query shape, CSS append rule |
| `mu-plugins/bk-release-date.php` | Field, date picker, 3-up pitch-c renderer |
| `css/newly-released-3188.append.css` | Append-only CSS scoped to `body.page-id-3188` |

Drop-in later, on staging only: copy `mu-plugins/bk-release-date.php` to `wp-content/mu-plugins/bk-release-date.php` (WordPress loads mu-plugins from that directory, not from subfolders). A child theme can `require` the same file from `functions.php` instead. Do not install it on the live site.

## CSS append (bk-wp-apply-standing)

Additional CSS is **appended**. Never wipe, replace, or reorder the existing Customizer CSS chain. If the apply path disables CodeMirror, still append at the end. Do not select-all.

`newly-released-3188.append.css` is the staging-3188 block to append later. It is not an instruction to paste anything onto page 4. Film, BOGOF, and chapter rules stay in the chain already on the site.

## Not in this trail

- No live apply and no page 4 apply (t67u).
- No claim the staging strip already updates itself. The landing strip is still static HTML until a later staging change.
- No PASS, no score ≥99, no seat handoff to Shak.
- Card 1 match-landing stays parked. No match-landing audit in this folder.
