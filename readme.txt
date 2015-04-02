=== Plugin Name ===
Contributors: rahendz
Donate link: http://example.com/
Tags: icons, tinymce, ajax, bootstrap, twitter, twitter bootstrap, glyphicons, visual editor, dahsicons, wordpress
Requires at least: 3.0.1
Tested up to: 4.1.1
Stable tag: 2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Bootstrap 3 Glpyhicon And Wordpress Dashicon Plugin

== Description ==

Is a dropdown button on visual editor that will insert Bootstrap 3.3.4 Glyphicon or Wordpress Dashicons into post/page on a shortcode and customizable size and/or color.

Instructions for use:

Method A (Visual Editor - Preferred):

1. Edit/Add any Page or Post

2. In the visual editor you will see a "RAphicon" dropdown button. Click the button

3. You will now be presented with a selection menu.

4. Simply select any icon and the shortcode will be placed into your post/page! OR if you tired to scrolling down the dropdown menu you use Browser Find Feature (ctrl+F) instead, just find using "D" (for dashicons) or "G" (for glyphicon) right before the icon_name of icon. example: "D Admin-post" without quote.


Method B (Manual Shortcode, by type manually into your post):
For default glyphicon shortcode :
`[glyphicon type="icon_name"]`
For default dashicons shortcode :
`[dashicons type="icon_name"]`
And you could put size and color attribute also:
`[glyphicon type="icon_name" size="size_with_units" color="color_with_hashtag"]`
it will looks like this:
`[glyphicon type="asterisk" size="20em" color="#999999"]`


 Method C (Native Style):
Since this loads the necessary fonts and css for the Glyphicon / Dashicons you may put them anywhere using the standardized code:
`<span class="glyphicon glyphicon-icon_name"></span>` or `<span class="dashicons dashicons-icon_name"></span>`

== Installation ==

1. Upload contents of `raphicon.zip` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to the visual editor for any page or post and use the "RAphicon" dropdown button.

== Screenshots ==

1. New Visual Editor Button
2. Icons Selection List
3. Custom attribute
4. Example Load on Frontpage / Single

== Changelog ==
= 2.1 =
* Twitter Bootstrap v3.3.4 Glyphicons
* Replace dropdown with modal window

= 1.0 =
* Initial release.
* Twitter Bootstrap v3.1.1 Glyphicons
* Wordpress Dashicons