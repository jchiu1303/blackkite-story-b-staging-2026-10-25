# Staff SOP — new release on the staging strip

Cite **t67u · t63u**. Staging page **3188** only. claim_ge_99=false.

Do this on the **staging** WordPress that owns page 3188, and only after that site is running the release-date plugin from this folder. Do not push, paste, or APPLY this to live WordPress or page 4. There is no separate Jon GO for production.

Until the staging page is switched off the static cards, setting a date only stores the field. The strip will not move yet. This SOP is the path after that staging switch. This file is not the switch.

## Add a beer to the strip

1. In staging wp-admin, open **Products → Add new** (or edit an existing product).
2. Set **Release date** with the date picker. The value is a calendar date (`YYYY-MM-DD`). The strip sorts on this date, not on the day you clicked Publish.
3. Set a featured image (the cutout the card should show) and the usual product name, price, and link.
4. **Publish** (or Update).
5. Purge the **staging** page cache for page 3188, including any object cache that staging host uses, then reload the staging landing. A cached copy can keep the old three cards for a while. Do not purge production. Do not edit page 4.
6. The strip lists up to **three** published products that have a release date, newest date first. A fourth dated product bumps the oldest of those three out of the strip. The bumped product stays in the catalog. If fewer than three products have a date, the strip shows only those. It does not fill the gap with undated products.

The first card is the large hero. The next two sit in the side stack. You do not reorder HTML by hand.

## Drop a beer from the strip

Use the smallest change that matches the intent:

- **Leave the catalog, leave the strip:** clear **Release date** and update. An empty date is not eligible.
- **Stay published, fall behind newer releases:** set an older release date so three newer dates outrank it.
- **Hide the product entirely:** move it out of Published (draft or trash). Drafts are not queried.

Clearing the date is the normal way to take one beer off the strip without unpublishing it. Deleting the product is only for a product that should leave the shop (including a temporary fourth test product after the staging proof).

## Dates to set first

Iron Goddess, Flower Market, and Heron need release dates on staging before the static cards are removed, or the column can render empty. Newest date takes the hero slot. This SOP does not invent those three dates.

## What staff do not do

- Do not edit the “Newly released” HTML on page 3188 to change order.
- Do not change page 4, and do not paste this strip onto the live site.
- Do not wipe **Appearance → Customize → Additional CSS**. A later staging CSS change appends. It does not replace the chain (bk-wp-apply-standing).
- Do not add an eighth card. The limit stays 3 until a later Jon GO.
