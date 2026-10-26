# ORDER — Jon t39u/t40u drop oil-beer; Blue Taxi start

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Confirmed offender: `assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4` (playlist #1 food↔beer; Scallion Pancake / Wheat Beer under H1).

Replacement already on disk:
- `assets/mkt-bk-4-3-blue-taxi-web.mp4` (1080×1920 web cut from Drive `14teBh6FM9p_3ri_igw2w-sSRUlyer8Du` BK 4.3 Blue Taxi Draft 1.1)
- First-paint poster: `assets/mkt-blue-taxi-frame0.jpg` (not blue-can mkt-hero-poster.jpg)

## Required edits
1. `index.html`:
   - In `clips[]`: replace `"assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4"` with `"assets/mkt-bk-4-3-blue-taxi-web.mp4"` (keep as index 0 / start). Keep other 12 paths and order.
   - `<source src=...>` on `#film-portrait`: same Blue Taxi web path.
   - `poster=` on `#film-portrait`: `assets/mkt-blue-taxi-frame0.jpg` (remove any oil-beer frame0 / mkt-hero-poster).
   - aria-label: drop Oil Beer; include Blue Taxi / Taxi Driver among clip names.
   - Keep dual-video A/B, object-position center 28%, preload=auto on A, 13 clips total.
2. `VIDEO_PICKS.md`: row 1 becomes Blue Taxi web; note oil-beer dropped (H1 covered BK/food↔beer); add Blue Taxi Drive id; move oil-beer to Skipped with reason.
3. Light STATUS.md + STATUS.json: t39u drop oil-beer; add blue-taxi-web; new start + poster; claim_ge_99=false.
4. Do not git push. Emit ONLY a Python 3 script (no fences) that applies the edits and prints CHANGED.

## Done when
- oil-beer path gone from clips[] / source / poster
- blue-taxi-web is clips[0] + source; poster is mkt-blue-taxi-frame0.jpg
- 13 clips; dual-video + center 28% intact; no mkt-hero-poster.jpg
