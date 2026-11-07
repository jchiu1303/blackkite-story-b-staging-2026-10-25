---
created: 2026-11-07
updated: 2026-11-07
type: order
status: frozen-jon-go
project: black-kite
card: bk-staff-upload-auto-releases
jon_msg: [t54u, t60u, t61u, t63u, t67u]
widget: t63s461
executor: cursor-cloud-then-flash-wp
claim_ge_99: false
apply: staging-3188-only
prod: hold
strip_limit: 3
hard_lock_t67u: no-push-paste-apply-live-wp-or-page-4
repo: jchiu1303/blackkite-story-b-staging-2026-10-25
---

# ORDER FROZEN — Card 2 (Jon GO t63u) — staging 3188 only

Cite t54u · t60u · t61u · **t63s461** · [[bk-wp-apply-standing]]. One WP apply owner. No page 4. Card 1 PARKED.

## Hard lock (t67u · t63u)

NO push, paste, or APPLY to live WordPress or page 4. Staging page **3188** only until a separate explicit Jon GO. This ORDER does not add a prod apply script or page-4 paste steps. Checking the repo trail into git is not a WordPress apply. claim_ge_99=false.

## 0. Preconditions

- [x] Jon GO t63u on DONE_SPEC + ORDER + repo B + strip=3
- [x] Jon hard lock t67u: no live WordPress / page 4 push, paste, or APPLY
- [ ] WP Admin confirm: no existing release-date meta/ACF (read-only) — or document reuse
- [ ] Repo branch ready on `jchiu1303/blackkite-story-b-staging-2026-10-25` (this code-trail PR is that branch; merge is still open)

## 1. Cursor cloud — code trail in story-b repo

Repo: `https://github.com/jchiu1303/blackkite-story-b-staging-2026-10-25`

Add (do not break GH Pages design assets):
- `blackkite-wp/DONE_SPEC.md` (copy frozen)
- `blackkite-wp/ORDER.md` (this file)
- `blackkite-wp/sop/staff-new-release.md`
- `blackkite-wp/notes/inventory-static-strip.md` (static HTML finding)
- Implementation scaffold for `bk_release_date` (mu-plugin or child-theme PHP snippet) + query/limit=3 pattern notes
- Prefer Woo native / block Query Loop or products shortcode orderby meta; PHP only if blocks cannot preserve pitch-c look

Checked in by the trail PR (still not a WP apply):

- `blackkite-wp/mu-plugins/bk-release-date.php`
- `blackkite-wp/css/newly-released-3188.append.css` (append-only; staging 3188 selectors)
- `blackkite-wp/notes/query-and-css-append.md`

## 2. Field

- Register `bk_release_date` (YYYY-MM-DD) unless WP Admin found an existing field
- Date-picker in admin; checked into repo

## 3. Staging strip replace (3188 only)

Later staging work. Not this PR. Not page 4. No paste onto live WordPress until a separate explicit Jon GO.

- Backup current 3188 Newly released HTML
- Set release dates on Iron / Flower / Heron
- Replace static promo-card HTML with query-driven markup; preserve pitch-c / hero2 look via CSS append (CodeMirror disable path; **append** — do not wipe CSS chain)
- Publish **3188** only

## 4. Proof

- Test 4th product date-order + limit 3; remove test
- Visual QA desk+mob vs pre-dump
- Studio soft-gate → Chief → Jon (prod still HOLD)

## 5. Stop

- No page 4 / prod
- No push, paste, or APPLY to live WordPress (t67u)
- No prod apply script and no page-4 paste instructions
- No invent PASS / ≥99
- No seat→Shak
- No Card 1 work
