---
created: 2026-11-07
updated: 2026-11-07
type: inventory
status: draft
project: black-kite
card: bk-staff-upload-auto-releases
jon_msg: [t54u, t60u, t63u, t67u]
parent_tip: 6b0b8119
claim_ge_99: false
apply: false
strip_limit: 3
---

# Inventory — Card 2 staff auto-releases

Cite t67u · t63u. claim_ge_99=false. This note records a finding. It is not an apply.

## Summary

The landing “Newly released” strip is **static HTML**, not a Woo Query Loop. Publishing a product cannot change membership or order until that HTML is replaced with a query.

A read-only look at the public homepage (live page 4) shows the same pattern the earlier body artifacts described: one eyebrow, then three hand-built cards. Class shape: `canwrap promo pitch-c` → `promo-eyebrow` (“Newly released.”) → `hero2` → `article.promo-card.hero-card` (Iron Goddess) plus `side-stack` with two `article.promo-card` nodes (Flower Market, Heron). Product links are real Woo URLs. There is no `wp-block-query`. This PR does not edit that page.

This repo’s GitHub Pages `index.html` is a different surface: one `.canwrap.promo` (Iron Goddess + “Newly released.”) and three chapters. It is not the WordPress strip, and this trail does not change it.

The release-date field was **not found** in the searched artifacts. Plan stays: add `bk_release_date` (`YYYY-MM-DD`) unless a read-only WP Admin pass finds an existing field to reuse. That confirm is still open. **TODO:** do not install the scaffold until that confirm is done.

Jon t63u locked the strip at **3** (date descending), not 8. The “last 8” question in the source inventory below is closed. Jon t67u locked the rest: no push, paste, or APPLY to live WordPress or page 4. Staging page **3188** only, and only after a separate explicit Jon GO for that apply.

## Source inventory (t60u)

---
created: 2026-11-07
updated: 2026-11-07
type: inventory
status: draft
project: black-kite
card: bk-staff-upload-auto-releases
jon_msg: [t54u, t60u]
parent_tip: 6b0b8119
claim_ge_99: false
apply: false
---

# Inventory — Card 2 staff auto-releases (t60u)

## Newly released strip — STATIC

Evidence:
- Live markdown fetch shows “Newly released.” + Iron Goddess / Flower Market / Heron as fixed content.
- Page-4 / 3188 body apply artifacts (`t285u-page-4-body.html`, `t213u-page-3188-body.html`, `t146u-paste.html`, etc.) use hardcoded `<p class="promo-eyebrow">Newly released.</p>` + `<article class="promo-card">` markup — **not** `wp-block-query` / products shortcode loop.
- Product **links** point at real Woo product URLs; the strip membership is hand-edited HTML.

Conclusion: front strip will not auto-update on product upload until replaced with a Woo-driven query (or equivalent).

## Release-date field — NOT FOUND in artifacts

Searched vault tips + `/workspace/blackkite-bkstaging-apply-t114u` apply tree: no `_release_date`, ACF release field, or documented product meta for release ordering beyond shop “newest first” catalog sorts (t83u shop order — separate from landing strip).

Conclusion: **plan to add** a Woo product meta / ACF date field (proposed key `bk_release_date`) with date-picker UI. One read-only WP Admin confirm hop before ORDER freeze (check product edit screen + ACF/field groups).

## Related lineage

- BK-08 `ef31eb9f` · Shak three-up `2164087d` · collab Iron Done t54u · plan tip `6b0b8119` · override t60u

## Still open (before apply)

1. WP Admin: confirm no existing release-date field under another name.
2. Decide strip limit: defaults say **last 8**; current live strip shows **3** — DONE_SPEC should state staging shows up to 8, visual layout adapts (or Jon locks 3 vs 8).

Item 2 was locked by Jon t63u at **3**. Item 1 stays open. Neither item authorizes a live apply (t67u).
