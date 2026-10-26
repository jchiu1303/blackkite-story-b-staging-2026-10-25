# ORDER — Jon GO t17u+t18u story-b staging (Imp Flash)

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
claim_ge_99=false · staging only · Shak Drive RO · no WP/prod/DNS · no APPLY invent · no contact Shak

## 1) Remove sell line (exact)
In index.html delete this entire line only (do not replace with other copy):
`<p class="sell">Brewery as film — one can per frame, then place chapters.</p>`
Leave `.sell` CSS unused if present. Do not touch `.promo-sell` ("Newly released.").

## 2) Revert hero playlist lean → prior web cuts
Replace every `*-lean.mp4` in (a) film `<source src=…>` and (b) JS `clips[]` with the matching non-lean prior file already on disk. Same 13-clip order ending Goodlooking then Sauce. Leave lean files on disk unused.

Exact map:
1. assets/mkt-bk-6-1-oil-beer-draft-2-2-lean.mp4 → assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4
2. assets/mkt-bk-6-2-reverse-throw-web-lean.mp4 → assets/mkt-bk-6-2-reverse-throw-web.mp4
3. assets/mkt-bk-7-4-clone-d2-lean.mp4 → assets/mkt-bk-7-4-clone-d2.mp4
4. assets/mkt-bk-5-1-jump-lean.mp4 → assets/mkt-bk-5-1-jump.mp4
5. assets/mkt-bk-7-2-magic-pizza-lean.mp4 → assets/mkt-bk-7-2-magic-pizza.mp4
6. assets/mkt-bk-4-1-brew-boys-lean.mp4 → assets/mkt-bk-4-1-brew-boys.mp4
7. assets/mkt-bk-4-3-char-siu-d31-lean.mp4 → assets/mkt-bk-4-3-char-siu-d31.mp4
8. assets/mkt-bk-5-3-pandan-lean.mp4 → assets/mkt-bk-5-3-pandan.mp4
9. assets/mkt-bk-5-2-cloudwater-d2-lean.mp4 → assets/mkt-bk-5-2-cloudwater-d2.mp4
10. assets/mkt-bk-4-2-purple-rice-d2-lean.mp4 → assets/mkt-bk-4-2-purple-rice-d2.mp4
11. assets/mkt-bk-7-3-ivan-lean.mp4 → assets/mkt-bk-7-3-ivan.mp4
12. assets/mkt-goodlooking-web-lean.mp4 → assets/mkt-goodlooking-web.mp4
13. assets/mkt-sauce-web-lean.mp4 → assets/mkt-sauce-web.mp4

## 3) Docs
- VIDEO_PICKS.md: playlist Local asset column + prose must cite the non-lean paths above (not *-lean). Note hero uses prior web cuts; lean files retained on disk unused. Keep Drive ids for source originals where already listed in t942u_wired. Goodlooking/Sauce Drive ids stay the web (non-lean) ids 18xO_K6P6Us1SHWNeuaGrXCD1XLnK6tcf / 1x3v5_Qzoo2Rs92Q7gdquPmA37wRK8nzX.
- STATUS.md: retitle away from lean-as-active; playlist section lists the 13 non-lean paths; note lean off / files unused on disk; locks unchanged; update when + Jon GO t17u+t18u.
- STATUS.json: set playlist/active paths to the 13 non-lean locals; order=t17u-revert-lean; last_tip=t17u+t18u; note lean off; keep lean: block as historical cite-only OR mark active=false — do not delete lean drive_ids history; update md5_index_8 / index_md5_8 after edit (caller will fill md5-8).

## Done when
- No sell `<p class="sell">…</p>` in index.html
- Zero `*-lean.mp4` refs in index.html source/clips
- VIDEO_PICKS + STATUS.md/json playlist paths match non-lean map
- Do not git push (caller pushes gh-pages)
- Do not delete lean mp4 files
