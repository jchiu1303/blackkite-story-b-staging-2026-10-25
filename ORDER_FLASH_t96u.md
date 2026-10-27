# ORDER — Jon GO / Chief t96u: Iron bottle wording + earnest tagline

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Base: ef0ce0d (t90u). Staging only. claim_ge_99=false. No WP/prod/DNS/Shak. Film/mailto/legal/Flower/Heron untouched.

Edit index.html only:

1) Earnest (stable brand line; beers rotate monthly):
   Replace exactly:
   `<p class="earnest">Iron Goddess, Flower Market, and Heron.</p>`
   with:
   `<p class="earnest">Exploring hong kong's flavour through beer</p>`
   (live blackkite.hk tagline exact; keep chips / This month / promo as rotating beers. No layout churn.)

2) Iron Goddess is a bottle, not a can — Iron only:
   - `#chip-iron` blurb: `Holy Goat collab. Strawberries and oolong tea in a sour.`
     → `Holy Goat collab. Strawberries and oolong tea in a sour bottle.`
   - `#chapter-iron` body: `A Holy Goat collab. Strawberries and oolong tea in a sour can.`
     → `A Holy Goat collab. Strawberries and oolong tea in a sour bottle.`
   - promo alt `Iron Goddess can.` → `Iron Goddess bottle.`
   - chapter shot alt `Iron Goddess sour, full can.` → `Iron Goddess sour, full bottle.`
   - chip thumb alt: if it says can, → bottle; leave empty alt alone if still empty.
   Do NOT change Flower Market / Heron copy (their "can" wording stays).

Emit ONLY a Python apply script that patches index.html in place and prints before/after of the five strings. No push. No invent PASS/APPLY.
