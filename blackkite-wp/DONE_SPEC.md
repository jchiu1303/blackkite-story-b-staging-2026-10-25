---
created: 2026-11-07
updated: 2026-11-07
type: done-spec
status: frozen-jon-go
project: black-kite
card: bk-staff-upload-auto-releases
jon_msg: [t54u, t60u, t61u, t63u, t67u]
widget: t63s461
parent_tip: 476d03a9
claim_ge_99: false
apply: staging-3188-only
prod: hold
strip_limit: 3
hard_lock_t67u: no-push-paste-apply-live-wp-or-page-4
repo: jchiu1303/blackkite-story-b-staging-2026-10-25
---

# DONE_SPEC FROZEN — Card 2 staff auto-releases (Jon GO t63u)

Cite t54u · t60u · t61u · widget **t63s461** · tip `476d03a9` · park `e00c88ff`. Soft HOLD kitchen locks unchanged. claim_ge_99=false. **No prod / page 4** until separate Jon GO. Card 1 stays PARKED for Shak eyes.

## Hard lock (t67u · t63u)

NO push, paste, or APPLY to live WordPress or page 4. Staging page **3188** only until a separate explicit Jon GO. This repo copy adds no prod apply script and no page-4 paste steps. claim_ge_99=false.

The frozen body below is the t63u DONE_SPEC. The t67u paragraph above is the addendum Jon locked onto this trail.

## Locks (t63u)

- Card2-first + defaults A–E (release-date field if missing; date-ordered strip).
- Strip: **3 cards** for now (date-ordered DESC) — **not** last 8.
- Repo: **B** extend `https://github.com/jchiu1303/blackkite-story-b-staging-2026-10-25`
- Staging page **3188** only.

## Done when (staging 3188)

1. Woo product has **Release date** field (proposed meta key `bk_release_date`) with date-picker on product edit — **or** confirmed existing equivalent field reused (WP Admin confirm first).
2. Landing “Newly released” on staging **3188** is driven by published products with release date set, ordered **DESC**, **limit 3** (show fewer if &lt;3; never invent products).
3. Iron Goddess, Flower Market, Heron appear correctly after dates set — no hand HTML edit to reorder.
4. A temporary 4th test product with a newer date enters the strip and bumps the oldest of the three out of the top-3 window; cleanup removes the test product.
5. Staff SOP in the story-b repo (`sop/staff-new-release.md`): add → set date → publish → appears; cache purge note.
6. Code trail (field registration / query pattern / CSS append notes) lives in that GitHub repo — not box-only scratch.
7. Visual QA: film / BOGOF / chapters do not regress vs pre-change staging dump (`web-visual-qa`).
8. Studio soft-gate only; no invent PASS / ≥99; no seat→Shak.

## Non-goals

- Prod page 4
- Strip of 8 (parked; revisit later Jon GO)
- Card 1 match-landing audit/ORDER (PARKED Shak)
- Bestbev cart (BK-09)
- Push, paste, or APPLY of this trail onto live WordPress (t67u)
