# LINK_AUDIT — Black Kite STAGING · design-2 story-b

Scope: `index.html` only (staging landing). Pack `/workspace/blackkite-story-b-staging-2026-10-25/`.
Source rewrite kept story-b Film·Czechmate body; Flash invent of a new HTML was discarded.

## a[href]

| href | where | kind | status |
|------|-------|------|--------|
| `#top` | logo `.mark` | anchor | FIXED (was `index.html`) |
| `#month` | nav Month | anchor | OK |
| `#stills` | nav Stills | anchor | OK |
| `#bridge` | nav Close | anchor | OK |
| `https://fonts.googleapis.com` | preconnect | external | OK |
| `https://fonts.gstatic.com` | preconnect | external | OK |
| Google Fonts css2 Barlow/Newsreader/Outfit | stylesheet | external | OK |
| `https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/` | footer Compare | external | FIXED (was `index.html`) |
| `…/story-a/` | footer A | external | FIXED (was `story-a.html`) |
| `…/story-c/` | footer C | external | FIXED (was `story-c.html`) |

No `href=""`. No bare `href="#"`. Anchors `#top` `#month` `#stills` `#bridge` all exist.

## Critical src / poster / JS clips

| path | where | status |
|------|-------|--------|
| `assets/czechmate-full.png` | video poster + promo + chip + chapter | OK (`../assets/` → `assets/`) |
| `assets/portrait-beer-distillery.mp4` | `<source>` + clips[0] | OK |
| `assets/portrait-beer-shelf.mp4` | clips[1] | OK |
| `assets/portrait-beer-bar.mp4` | clips[2] | OK |
| `assets/skybound.jpg` | chip + chapter Skybound | OK |
| `assets/badass-full.png` | chip + chapter Badass | OK |

## Dropped vs picker (expected — landing-only staging)

- Picker root cards → `story-a/` `story-b/` `story-c/`
- `assets/soft-placeholders.css`, `preview-a.jpg` `preview-b.jpg` `preview-c.jpg`
- Local sibling story folders and pick README baseline blurb on the picker page
- Beers/assets used only by A/C (wide dual videos, reel-*, glider, czechmate.jpg thumb, etc.)

## Source bugs fixed

story-b footer/logo used `index.html`, `story-a.html`, `story-c.html` (wrong relative names even inside the pick pack). Staging maps logo → `#top` and Compare/A/C → live pick Pages URLs so pick main stays the compare surface.

## t930u marketing home videos

| path | status |
|------|--------|
| `assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4` | OK — Drive `11y0JI9YaT9fx3m7TCU85dHhm3Cho32yb` |
| `assets/mkt-bk-6-2-reverse-throw-web.mp4` | OK — from Drive `1Yyf0478M8byouikA9OVtfwGriF4cNaG7` (web scale) |
| `assets/mkt-hero-poster.jpg` | OK — poster from 6.2 |
| Soft `portrait-beer-*.mp4` | DROPPED from staging (replaced) |
| Sep24 BK 9.1 / 9.2 | SKIPPED — over DownloadFile 100 MB (see VIDEO_PICKS.md) |
