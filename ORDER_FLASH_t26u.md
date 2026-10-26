# ORDER — Jon t26u dual-video no poster mid-playlist

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Live Pages already has t22u clearPoster+hidden preload; Jon still sees blue BK can between clips because setting visible `.src` flashes poster/loadstart. Fix: dual-video layer swap.

## Required
1. In `.film-video`, keep `#film-portrait` as layer A. Add sibling `#film-portrait-b` same classes (`film-banner`), muted playsinline, no poster, preload=none, aria-hidden=true, initially hidden (opacity:0 / visibility or z-index under A).
2. CSS: both `.film-banner` absolute fill parent (already); ensure stack so only one visible. Optional `.film-banner.is-front { opacity:1; z-index:1 }` / `.film-banner.is-back { opacity:0; z-index:0 }` with no transition required (instant swap OK; brief crossfade ≤150ms OK). Background stays `#0c0b09`.
3. JS: 13-clip web array unchanged (lean off). A starts on clips[0] (poster only on A for first paint). On A's first `playing`, remove poster from A forever. B preloads clips[1].
4. On active `ended`: when back layer has canplay for next url, start back.play(), flip front/back classes (or opacity), clear any poster attrs on both, load following clip into the new back layer. Never set `.src` on the currently visible layer. Never re-assign poster.
5. prefers-reduced-motion: pause both, remove autoplay, no cycle.
6. No copy invent. No lean. Do not git push. Emit ONLY a Python 3 script (no fences) that edits index.html (+ light STATUS note) and prints CHANGED.
