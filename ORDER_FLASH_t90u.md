# ORDER — Jon GO t90s329 / Chief t90u: six UX fixes

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Base cb2cb3e three beers. Keep film dual-video / oil-beer / mailto / HK liquor.

1. `#month` text → `This month`. Remove `<p class="label">Chip → chapter · one can per frame</p>` entirely.
2. `.earnest` → plain: `Iron Goddess, Flower Market, and Heron.` (keep H1; no metaphors; no sell line).
3. Bridge `<p>` → `Bars — write us for this month’s three.` Keep mailto link unchanged.
4. Chip blurbs (shop voice; no “held still” / “quiet in the frame”):
   - Iron: `Holy Goat collab. Strawberries and oolong tea in a sour.`
   - Flower: `Tomato gose. Flower Market on the can.`
   - Heron: `Single-hop Hallertau IPA.`
5. Square-friendly CSS for Iron Goddess 600×600 on `.canwrap.promo img`, `#chapter-iron .shot img`, `#chip-iron img` (aspect-ratio 1/1, object-fit contain, centered — not a flat tile vs tall cans).
6. Replace thin chip script with fb5366d chip+motion IIFE (open/close/position/scroll/Escape/outside-click + js-motion IntersectionObserver). Keep dual-video script. Do not restore old single-video cycle.

STATUS t90u light. claim_ge_99=false. Emit ONLY Python apply script. No push.
