# ORDER — Jon GO t22u story-b staging inter-clip poster flash

Pack: /workspace/blackkite-story-b-staging-2026-10-25/index.html only (STATUS.md/json note optional).
claim_ge_99=false · staging · Shak RO · no APPLY · no copy invent · keep 13-clip web order (lean off).

## Bug
On `ended`, `v.src = next` flashes `poster="assets/mkt-hero-poster.jpg"` (blue BK can) while next buffers.

## Fix (required behavior)
1. Clear poster after first play starts (`removeAttribute('poster')` / `poster=""`) so it never returns between clips.
2. Preload the next clip with a hidden second `<video>` (muted, playsinline, aria-hidden, off-screen/0-size). On `ended`, swap visible `v.src` only when next has `canplay` (or readyState>=3). Until then keep showing the last decoded frame (poster already cleared); film bg `#0c0b09` already on `.film-video`/`.film-banner`.
3. After swap, preload the following clip. Same 13 `clips[]` order ending Goodlooking then Sauce. Honor `prefers-reduced-motion` (pause, no cycle) as today.
4. Do not change markup copy, CSS sell, promo, or asset paths. Do not reintroduce lean. Do not git push (caller pushes).

## Deliverable
Emit ONLY a complete Python 3 script (no markdown fences) that replaces the film playlist IIFE in index.html (the block starting `var v = document.getElementById("film-portrait");` through its closing `})();`) with the fixed version, then prints CHANGED lines and exits 0.
