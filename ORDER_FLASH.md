# ORDER — Black Kite design-2 story-b STAGING landing (Jon t929u / widget story_b)

Seat: Implementer · executor Flash `deepseek/deepseek-v4.1-flash-1017` · claim_ge_99=false
Tip cite: vault `black-kite-jon-design2-story-b-staging-2026-10-25` tip `925d1cfd`

## Goal
Emit file bodies only (no shell, no commentary outside fences). Staging landing = story-b Film·Czechmate feel as site root. NOT live WP. No DNS. No contact Shak. His photos only. Do not invent PASS / APPLY / ≥99 / publish / prod.

## Inputs (already on disk)
- Source story-b HTML: `/workspace/blackkite-shak-pick-pages-2026-10-19/story-b/index.html`
- Assets already copied to: `/workspace/blackkite-story-b-staging-2026-10-25/assets/` (badass-full.png, czechmate-full.png, skybound.jpg, portrait-beer-distillery.mp4, portrait-beer-shelf.mp4, portrait-beer-bar.mp4)
- Untouched pick (must stay live): https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/
- Baseline cite: https://jchiu1303.github.io/blackkite-shak-pick-2026-10-15/

## Emit these files as fenced blocks labeled exactly:
### FILE: index.html
Rewrite from source story-b:
1. Every `../assets/` → `assets/` (src, poster, and JS clips[]).
2. Banner text: `<p class="soft-banner"><strong>STAGING</strong> · design-2 story-b · not live · not WP · his photos only</p>`
3. Title: `Black Kite — STAGING · B · Film · Czechmate`
4. Keep robots noindex.
5. Fix dead cross-story paths (source had broken `story-a.html` / `story-c.html` / `index.html`):
   - Logo `.mark` href → `#top`
   - Footer Compare → `https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/`
   - Footer A → `https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/story-a/`
   - Footer C → `https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/story-c/`
6. Keep in-page nav `#month` `#stills` `#bridge` (not empty).
7. Keep chip JS + video playlist JS; only path rewrite.
8. No empty `href="#"` alone, no `href=""`.
9. Plain English only in banner/copy you add — no Soft jargon tokens.

### FILE: LINK_AUDIT.md
Table of every a[href] and critical src after rewrite: href, kind (anchor|external|asset), status (OK|FIXED|DROPPED).
Section "Dropped vs picker": list picker links that staging landing does not include (story picker cards A/B/C, soft-placeholders.css, preview-*.jpg, local story-a/b/c folders) — expected for landing-only staging.
Section "Known source bugs fixed": story-a.html / story-c.html / relative index.html in story-b footer/logo.

### FILE: INTERACTION.md
Short notes: sticky staging banner; film hero video autoplay muted + playlist cycle distillery→shelf→bar; chip open panel + scroll to chapter; scroll-snap y; mobile single-column media query; reduced-motion pauses video. No claim of PASS.

### FILE: ROLLBACK.md
Keep https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/ + WP prod untouched. Staging is a separate preview repo/folder. Reversible by not promoting staging → WP/DNS and by leaving pick main alone. No Unique APPLY beyond this Pages staging preview.

### FILE: STATUS.md
When Asia/Manila; seat Imp Flash; Jon GO t929u design-2=story_b; pack path; preview URL placeholder `PREVIEW_URL_TBD`; locks listed; spend n_calls=1 cost_est placeholder; md5 placeholders `MD5_INDEX` `MD5_STATUS`; done-when checklist; hand Reviewer for gate (do not run Reviewer).

### FILE: README.md
One screen: what this is (staging only), preview URL TBD, cite pick + tip 925d1cfd, locks.

## Do not
Touch `/workspace/blackkite-shak-pick-pages-2026-10-19/` · WP · DNS · contact Shak · invent PASS.
