# INTERACTION — Black Kite STAGING · design-2 story-b

Staging preview notes only. No PASS claim.

## Sticky staging banner
`.soft-banner` sticky top. Copy: `STAGING · design-2 story-b · not live · not WP · his photos only`. `scroll-padding-top` clears the banner for in-page anchors.

## Film hero
Left column `<video id="film-portrait">` autoplay muted playsinline, poster Czechmate full. On `ended`, JS cycles sources: distillery → shelf → bar → repeat. `prefers-reduced-motion: reduce` pauses and removes autoplay.

## Chips → chapters
Month strip chips (Skybound / Czechmate / Badass) open a panel and `scrollIntoView` the matching `#chapter-*`. Escape / outside click / Close closes panel.

## Scroll
`scroll-snap-type: y proximity` on sections. Mobile `@media (max-width:900px)` collapses film grid and chapters to one column.

## Footer
Compare / A / C open the untouched pick Pages site (new tab same-origin github.io). B is this staging page.
