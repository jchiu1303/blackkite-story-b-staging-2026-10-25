# ORDER — Jon t51u via Chief: mailto + HK legal + drop Blue Taxi

Pack: /workspace/blackkite-story-b-staging-2026-10-25/

## Required edits
1. `index.html` bridge CTA:
   - Change `<span class="write">For bars · write us</span>` to an `<a class="write" href="mailto:beer@blackkite.hk?subject=Bars%20enquiry">For bars · write us</a>` (exact address beer@blackkite.hk only; short subject OK).
2. Footer near existing 18+ note: add the EXACT legal paragraph (do not shorten or invent):
   "Under Hong Kong law, it is not permitted to sell or supply intoxicating liquor to minors in the course of business. Under the law of Hong Kong, intoxicating liquor must not be sold or supplied to a minor in the course of business."
   Place as a second line/paragraph in `.foot` (or immediately under the 18+ span). Keep existing 18+ / zh note and Compare links.
3. Playlist: remove `"assets/mkt-bk-4-3-blue-taxi-web.mp4"` from `clips[]` entirely. Keep oil-beer as clips[0]; next becomes reverse-throw (was index 2). Keep poster `assets/mkt-oil-beer-frame0.jpg` and source oil-beer. Do NOT delete asset files. Update aria-label: drop Blue Taxi. Keep dual-video, object-position center 28%, preload=auto on A. Result: 13 clips.
4. VIDEO_PICKS.md: remove Blue Taxi from Used table; renumber; note dropped t51u (playlist only; file retained). Poster stays oil-beer frame0. oil-beer remains start.
5. Light STATUS.md + STATUS.json: t51u mailto + exact HK liquor line + Blue Taxi dropped from playlist; claim_ge_99=false.
6. Do not git push. Emit ONLY a Python 3 script (no fences) that applies the edits and prints CHANGED.

## Done when
- mailto:beer@blackkite.hk on write-us CTA
- exact legal sentence pair present in footer
- blue-taxi-web gone from clips[]/source/aria; oil-beer still first + poster
- no mkt-hero-poster.jpg; dual-video intact
