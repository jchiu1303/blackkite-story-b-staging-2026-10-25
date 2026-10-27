# ORDER — Jon GO / Chief t103u: remove jump nav

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
Base: 548c66f (t96u). Staging only. claim_ge_99=false. No WP/prod/DNS/Shak.

Edit index.html only:

1) Delete the entire `<nav class="nav">…</nav>` block (Month / Stills / Close links to #month #stills #bridge).
2) Keep `<a class="mark" href="#top">…BLACK KITE</a>` and the `.bar` wrapper.
3) Keep section ids `#month` `#stills` `#bridge` (and `#top`) — content stays; just no jump links.
4) Remove unused `.nav` / `.nav a` / `.nav a:hover` CSS and any media-query `.nav` rules if nothing else uses `.nav`.
5) Do not touch earnest/tagline, Iron bottle copy, chips, film, mailto, legal, Flower/Heron.

Emit ONLY a Python apply script that patches index.html and prints confirmation that nav is gone and mark/#top remain. No push. No invent PASS/APPLY.
