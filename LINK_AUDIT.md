# LINK_AUDIT — Black Kite STAGING · design-2 story-b (t964u)

Scope: `index.html` only (staging landing). Pack `/workspace/blackkite-story-b-staging-2026-10-25/`.
VIDEO_PICKS.md is source of truth for hero clips.

## a[href]

| href | where | kind | status |
|------|-------|------|--------|
| `#top` | logo `.mark` | anchor | OK |
| `#month` | nav Month | anchor | FIXED t964u (scroll-snap removed; scroll-margin + hash handler) |
| `#stills` | nav Stills | anchor | OK (+ same scroll-margin) |
| `#bridge` | nav Close | anchor | OK (+ same scroll-margin) |
| `https://fonts.googleapis.com` | preconnect | external | OK |
| `https://fonts.gstatic.com` | preconnect | external | OK |
| Google Fonts css2 Barlow/Newsreader/Outfit | stylesheet | external | OK |
| `https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/` | footer Compare | external | OK |
| `…/story-a/` | footer A | external | OK |
| `…/story-c/` | footer C | external | OK |

No `href=""`. No bare `href="#"`. Anchors `#top` `#month` `#stills` `#bridge` all exist.

## Critical src / poster / JS clips (SoT = VIDEO_PICKS · Oil Beer→Sauce (13))

| path | where | status |
|------|-------|--------|
| `assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4` | `<source>` + clips[0] | OK |
| `assets/mkt-bk-6-2-reverse-throw-web.mp4` | clips[1] | OK |
| `assets/mkt-bk-7-4-clone-d2.mp4` | clips[2] | OK |
| `assets/mkt-bk-5-1-jump.mp4` | clips[3] | OK |
| `assets/mkt-bk-7-2-magic-pizza.mp4` | clips[4] | OK |
| `assets/mkt-bk-4-1-brew-boys.mp4` | clips[5] | OK |
| `assets/mkt-bk-4-3-char-siu-d31.mp4` | clips[6] | OK |
| `assets/mkt-bk-5-3-pandan.mp4` | clips[7] | OK |
| `assets/mkt-bk-5-2-cloudwater-d2.mp4` | clips[8] | OK |
| `assets/mkt-bk-4-2-purple-rice-d2.mp4` | clips[9] | OK |
| `assets/mkt-bk-7-3-ivan.mp4` | clips[10] | OK |
| `assets/mkt-goodlooking-web.mp4` | clips[11] | OK |
| `assets/mkt-sauce-web.mp4` | clips[12] | OK |
| `assets/mkt-hero-poster.jpg` | video poster | OK |
| `assets/czechmate-full.png` | promo + chip + chapter | OK |
| `assets/skybound.jpg` | chip + chapter Skybound | OK |
| `assets/badass-full.png` | chip + chapter Badass | OK |

## Dropped / not Critical

- Soft `portrait-beer-*.mp4` — removed from staging (replaced by marketing heroes); not Critical.
- Sep24 BK 9.1/9.2 originals skipped; **web cuts wired t973u** (`mkt-goodlooking-web` / `mkt-sauce-web`).
- Picker-only assets (soft-placeholders, preview-a/b/c, A/C dual videos) — out of staging scope.

## t964u WEAK fixes

1. month-nav-overshoot — removed `scroll-snap-type` / film `scroll-snap-align`; set `scroll-padding-top` + `#month/#stills/#bridge` `scroll-margin-top`; hash click uses `scrollIntoView`.
2. link-audit-critical-stale — Critical table now lists current 13-clip set; portrait-beer rows dropped.

## Locks
Staging only · WP/DNS/pick untouched · Shak Drive RO (t961u) · claim_ge_99=false · no PASS invent.

index.md5-8 after t964u: `6b0f7d93`
