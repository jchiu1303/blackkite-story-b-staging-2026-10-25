# ROLLBACK — Black Kite STAGING · design-2 story-b

## What stays untouched
- Pick (live, untouched): https://jchiu1303.github.io/blackkite-shak-pick-2026-10-19/
- Baseline cite (read-only): https://jchiu1303.github.io/blackkite-shak-pick-2026-10-15/
- WP production: untouched
- DNS: untouched
- Shak: not contacted

## What this staging is
A separate Pages preview — its own preview repo/folder under
`/workspace/blackkite-story-b-staging-2026-10-25/`. It does not share a path with the pick repo
and does not write into `/workspace/blackkite-shak-pick-pages-2026-10-19/`.

## Rollback
1. Do not promote staging → WP and do not point DNS at it. That alone leaves prod and pick unchanged.
2. Delete or archive the staging preview repo/folder; the pick main stays live as-is.
3. If a preview URL was published, unpublish the staging Pages site only — the pick repo is a
   different Pages site and is not affected.
4. No data migration, no rewrite, no cache purge on the pick or WP side is required.

## Blast radius
Zero on prod. Zero on pick. Zero on DNS. Reversible by inaction (not promoting) plus deleting the
staging folder/repo.

## Out of scope
Any Unique APPLY beyond this Pages staging preview. None performed, none implied.
