# STATUS — Black Kite STAGING · design-2 story-b (t17u+t18u lean off)

- When: 2026-10-26 ~23:55 Asia/Hong_Kong
- Seat: Implementer · Jev seat=grunt conf~0.7 overridden Imp Flash (GO D; Grunt=home GPU only) · skill_flag=none
- Jon GO: t17u+t18u via Chief — remove sell line; revert hero playlist lean → prior web cuts
- Pack: /workspace/blackkite-story-b-staging-2026-10-25/
- Preview: https://jchiu1303.github.io/blackkite-story-b-staging-2026-10-25/
- Repo: https://github.com/jchiu1303/blackkite-story-b-staging-2026-10-25
- Drive pack folder: https://drive.google.com/drive/folders/1sJQ-ypmCu64n-fgOJeZ13GRhfmgkimw-
- VIDEO_PICKS: /workspace/blackkite-story-b-staging-2026-10-25/VIDEO_PICKS.md
- LEAN_SIZES: /workspace/blackkite-story-b-staging-2026-10-25/LEAN_SIZES.tsv (historical; lean unused)
- Pick untouched: https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/

## Marketing videos on hero playlist (13 prior web cuts; lean off)
Hero `<source>` + JS `clips[]` use non-lean paths. `*-lean.mp4` retained on disk unused.

| # | Local asset |
|---|-------------|
| 1 | `assets/mkt-bk-4-3-blue-taxi-web.mp4` |
| 2 | `assets/mkt-bk-6-2-reverse-throw-web.mp4` |
| 3 | `assets/mkt-bk-7-4-clone-d2.mp4` |
| 4 | `assets/mkt-bk-5-1-jump.mp4` |
| 5 | `assets/mkt-bk-7-2-magic-pizza.mp4` |
| 6 | `assets/mkt-bk-4-1-brew-boys.mp4` |
| 7 | `assets/mkt-bk-4-3-char-siu-d31.mp4` |
| 8 | `assets/mkt-bk-5-3-pandan.mp4` |
| 9 | `assets/mkt-bk-5-2-cloudwater-d2.mp4` |
| 10 | `assets/mkt-bk-4-2-purple-rice-d2.mp4` |
| 11 | `assets/mkt-bk-7-3-ivan.mp4` |
| 12 | `assets/mkt-goodlooking-web.mp4` |
| 13 | `assets/mkt-sauce-web.mp4` |

## Still skipped
- Sonnys 7.1 (~241 MB) · March BK 1.x (>180 MB)

## Locks
claim_ge_99=false · staging Pages only · WP/DNS/Shak RO · his photos/marketing only · no PASS invent · pick untouched · `.film-banner` object-fit:cover · `#film-portrait` preload=none · sell line removed (no replacement copy)

## Checksums (md5-8)
- index.html: e79ad6e0 (was dc52b1f9)
- Job B captions: HOLD (await Chief shortlist)

## t26u
- Dual-video A/B layer swap (`#film-portrait` / `#film-portrait-b`). Visible layer `.src` never reassigned; poster cleared on first play and never reset. Back preloads next; flip on canplay.
- index.md5-8: e79ad6e0

## t22u
- Inter-clip poster flash fixed: clear poster on first play; hidden preload `<video>`; swap on `ended` only after next `canplay` (last frame / `#0c0b09` until swap)
- index.md5-8: e8ca6050

## t17u+t18u
- Removed exact sell `<p class="sell">…</p>`
- Reverted playlist lean → prior web cuts; lean files unused on disk
- t26u: `index.html` uses dual `<video class="film-banner">` layers (`#film-portrait` A / `#film-portrait-b` B, `is-front`/`is-back`, bg `#0c0b09`). A starts on clips[0] with poster, poster stripped on first `playing`; B preloads clips[1]; on `ended` the back layer waits for `canplay`, plays, then layers swap — visible layer `.src` is never reassigned and no poster is re-set; reduced-motion pauses both, drops autoplay, no cycle.
- t29u: first-paint poster = assets/mkt-oil-beer-frame0.jpg; no blue can on cold load. (superseded t39u → blue-taxi frame0)
- t35u: object-position center 28% on film banners (show more in-clip top script).

## t39u/t40u — 2026-10-25
- Dropped oil-beer start (`assets/mkt-bk-6-1-oil-beer-draft-2-2.mp4`): H1 covered by BK (food↔beer).
- Added Blue Taxi web (`assets/mkt-bk-4-3-blue-taxi-web.mp4`, Drive `14teBh6FM9p_3ri_igw2w-sSRUlyer8Du`, BK 4.3 Blue Taxi Draft 1.1).
- New start clip = Blue Taxi; poster = `assets/mkt-blue-taxi-frame0.jpg`.
- `claim_ge_99=false`.
