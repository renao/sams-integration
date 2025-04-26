=== SAMS Integration ===
Contributors:      renao
Tags:              block
Tested up to:      6.8
Requires at least: 5.6.0
Stable tag:        1.2.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Inofficial plugin to display data from the official result service `SAMS` 
by the german volleyball confederation DVV (Deutscher Volleyballverband).

== Description ==

Never update rankings or fixtures lists by hand again!

The `SAMS Integration` will integrate the actual ranking or fixtures into your WordPress website.

To use this plugin you need to get an API key. Usually you can get this easily from your regional 
confederation. I got mine from the WVV (Westdeutscher Volleyballverband).

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/sams-integration` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

== Customization ==

Since version 1.2.0 you are able to override the default representation of the ranking and the fixtures view.

Just add a new template file to the folder of your currently used theme:

* Ranking: `sams-integration/ranking-template.php`
* Fixtures: `sams-integration/fixtures-template.php`

You can find the default implementation in the `sams-integration/build/php/templates/` folder to get a starting point how things are working.

Perhaps some additional customizations will be added in the future (e.g. the format of the fixtures venues).

== Frequently Asked Questions ==

= Where do I obtain an API Key? =

If you or your club is a member of a regional confederation you can get this API key easily from them.

== Screenshots ==

1. Preview of the Ranking and the Fixtures block inside the Gutenberg editor
2. (example) Rendered ranking integrated to a sample page
3. (example) Rendered fixtures integrated to a sample page

== Changelog ==

= 1.2.0 =
* Add customazation options for ranking and fixtures
* Fix broken br-tag in fixture venue

= 1.0.1 =
* Upgrade dependencies
* Add support for WordPress 6.8

= 1.0.0 =
* Initial Release