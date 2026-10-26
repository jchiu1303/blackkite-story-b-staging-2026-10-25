# ORDER — Jon t44u via Chief: oil-beer first again; Blue Taxi second

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Assets on disk (do not re-download):
- `assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4` (beer-handoff / food↔beer)
- `assets/mkt-oil-beer-frame0.jpg` (cold-load poster for first clip)
- `assets/mkt-bk-4-3-blue-taxi-web.mp4` (keep in set, second)

## Required edits
1. `index.html`:
   - Prepend `"assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4"` as `clips[0]`.
   - Keep `"assets/mkt-bk-4-3-blue-taxi-web.mp4"` as `clips[1]` (immediately after oil-beer). Keep the other 12 paths in the same relative order after blue-taxi (14 clips total).
   - `#film-portrait` poster=`assets/mkt-oil-beer-frame0.jpg` (not blue-taxi frame0; never `mkt-hero-poster.jpg`).
   - `#film-portrait` `<source src=` = oil-beer path.
   - aria-label: lead with Oil Beer / beer handoff, then Blue Taxi among names.
   - Keep dual-video A/B, object-position center 28%, preload=auto on A.
2. `VIDEO_PICKS.md`: row 1 = oil-beer (start); row 2 = blue-taxi-web; renumber; poster = mkt-oil-beer-frame0.jpg; remove oil-beer from Skipped (or note restored t44u).
3. Light STATUS.md + STATUS.json: t44u oil-beer first + Blue Taxi second; poster oil-beer frame0; claim_ge_99=false.
4. Do not git push. Emit ONLY a Python 3 script (no fences) that applies the edits and prints CHANGED.

## Done when
- clips[0]=oil-beer, clips[1]=blue-taxi-web; source+poster match oil-beer
- dual-video + center 28% intact; no mkt-hero-poster.jpg for first paint
