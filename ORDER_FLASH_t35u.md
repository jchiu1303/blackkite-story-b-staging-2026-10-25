# ORDER — Jon t35u lower hero crop (show more in-clip top script)

Pack: /workspace/blackkite-story-b-staging-2026-10-25/
On tip 010523f. Dual-video + oil-beer frame0 poster stay. 13 web cuts stay.

## Required
1. In `index.html` CSS for `.film-banner`: change `object-position: center;` → `object-position: center 28%;` (nudge toward top so Station/Wheat/Pancake/Beer script in-frame shows more).
2. Also set `object-position: center 28%;` on `#film-portrait, #film-portrait-b` (alongside existing `object-fit: cover`) so both A/B layers match.
3. Do not change object-fit (keep cover). Do not touch canwrap/promo, chapters, chips, copy, JS, clips, poster, preload.
4. Light STATUS.md one-liner: t35u object-position center 28% on film banners.
5. No copy invent. No WP. No lean. Do not git push.
6. Emit ONLY a Python 3 script (no fences) that edits index.html (+ light STATUS.md) and prints CHANGED.

## Done when
- `.film-banner` and `#film-portrait, #film-portrait-b` use `object-position: center 28%;`
- dual-video / first-paint / 13 clips unchanged
