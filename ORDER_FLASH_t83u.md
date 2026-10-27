# ORDER — Jon t83u via Chief: newest-first landing from live shop

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Assets already on disk (do not re-download):
- assets/iron-goddess.png (Firefly-3.png 600×600 from live shop)
- assets/flower-market.png
- assets/heron.png
- assets/flaming-tanager.png
- assets/skybound.jpg, czechmate-full.png, badass-full.png (keep)

Shop date desc (2026-10-27): Iron Goddess → Flower Market → Heron → Flaming Tananger → Skybound → Czechmate → Badass.

## Do NOT touch
Film hero playlist / dual-video / oil-beer first / Blue Taxi off / mailto beer@ / HK liquor footer / soft-banner.

## Required HTML edits (index.html)
1. `<title>`: Black Kite — STAGING · B · Film · Iron Goddess (not Czechmate).
2. Promo canwrap: img assets/iron-goddess.png alt="Iron Goddess can."; name Iron Goddess; sell Newly released.
3. month-label: `The month · newest first`
4. Chips + panels (newest first, then older). Chip labels short:
   - Iron Goddess → chip-iron / chapter-iron · meta Sour · blurb: Collab sour. Strawberries and oolong, held still.
   - Flower Market → chip-flower / chapter-flower · meta Tomato gose · blurb: Market colour on aluminium. A tomato gose, quiet in the frame.
   - Heron → chip-heron / chapter-heron · meta Hallertau IPA · blurb: One hop. Hallertau on a quiet heron.
   - Flaming Tananger → chip-tanager / chapter-tanager · meta Special · blurb: A bright bird on the can. Specials shelf, held level.
   - Skybound / Czechmate / Badass: keep existing meta+blurb; retarget assets.
5. `#stills` chapters in same order, idx 01–07:
   - 01 Iron Goddess · h2 Collab sour · slate Iron Goddess · Sour · p A Holy Goat collab. Strawberries and oolong tea in a sour can.
   - 02 Flower Market · h2 Market still · slate Flower Market · Tomato gose · p Tomato gose. The market’s colour, held on aluminium.
   - 03 Heron · h2 One hop · slate Heron · Hallertau IPA · p Hallertau alone. A heron on the label, quiet in the frame.
   - 04 Flaming Tananger · h2 Bright bird · slate Flaming Tananger · Special · p A specials can. Colour up front, lid in the crop.
   - 05–07 keep Skybound / Czechmate / Badass copy; renumber idx.
6. Bridge line: `Newest first — live shop order. The rest of the beer leaves quietly.`
7. STATUS.md light t83u note; claim_ge_99=false.
8. Emit ONLY a Python 3 script (no fences) that applies edits and prints CHANGED. Do not git push.

## Done when
Promo = Iron Goddess Newly released; chips/chapters shop-newest-first; film/mailto/legal untouched.
