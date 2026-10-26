# ORDER — Jon t29u/t30u kill blue-can FIRST-PAINT flash

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Prior: t26u dual-video LAND 270a460 (clip handoffs OK). Jon still sees blue BK can on cold load / hard refresh because `#film-portrait` has `poster="assets/mkt-hero-poster.jpg"` (blue can still).

## Required
1. In `index.html` on `#film-portrait`:
   - Change `poster="assets/mkt-hero-poster.jpg"` → `poster="assets/mkt-oil-beer-frame0.jpg"` (first frame of clips[0]; already on disk; dark film frame, NOT blue can).
   - Change `preload="none"` → `preload="auto"` on `#film-portrait` only (so first paint / first decode is faster). Leave `#film-portrait-b` preload as-is / set by JS.
2. Keep dual-video A/B swap, 13 web clips, stripPoster on playing/advance — do not regress t26u.
3. Do NOT reintroduce `mkt-hero-poster.jpg` anywhere in index.html.
4. Light STATUS.md / STATUS.json note: t29u first-paint poster = oil-beer frame0; no blue can on cold load.
5. No copy invent. No WP. No lean. Do not git push.
6. Emit ONLY a Python 3 script (no fences) that edits index.html (+ light STATUS) and prints CHANGED when done. Script must be runnable as `python3 -` from stdin or saved and run.

## Done when
- index.html has no `mkt-hero-poster.jpg`
- `#film-portrait` poster points at `assets/mkt-oil-beer-frame0.jpg`
- `#film-portrait` preload is auto
- dual-video JS intact; 13 clips unchanged
