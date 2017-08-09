=== Gallery Theme ===

Contributors: massoud-mx
Tags: gallery, theme, template, style, templating, styling, photo
Requires at least: 3.5
Tested up to: 4.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

You will be able to deeply style wordpress galleries using this plugin.

== Description ==

You will be able to deeply style wordpress galleries using this plugin.<br>
You can design your own gallery theme and place it in your template folder (in the root).

There is a simple theme file 'gallery-theme-default.php' in the plugin's 'themes' folder (wp-content\plugins\gallery-theme\themes). You can use it as a sample to design your own theme files.<br>
Remember: When you activate this plugin all of your wordpress galleries will use this simple theme instead of the wordpress's default internal gallery theme.

You can also have multiply theme files and edit your galleries shortcodes to use one of those themes.<br>
For example:

- If you choose your gallery theme file name like this: 'gallery-theme-default.php' and place it in the root of your template folder, galleries will use this theme as default theme instead of wordpress's default internal gallery theme<br>
- If you choose your gallery theme file name like this: 'gallery-theme-example.php' and place it in the root of your template folder, you should edit your gallery shortcode like this to use this theme: [gallery ids="729,732,731,720" theme="example"].

Note: It's better to place all your needed css and javascript files out of your gallery theme file. It's better to place them in your main template's header file.

Note: Beside the simple default theme, there is another advanced theme 'Fotorama' already integrated and ready to use with this plugin. You can use this theme just by adding theme="fotorama" into your gallery shortcode.

<a href="http://mmx.name/" target="_blank">Website Link</a>

== Installation ==

You can download and install gallery-theme using the built in wordpress plugin installer. If you download gallery-theme manually, make sure it is uploaded to "/wp-content/plugins/gallery-theme/".<br>
Activate gallery-theme in the "Plugins" admin panel using the "Activate" link.<br>
That's it. There are no settings or wizard.

<a href="http://mmx.name/" target="_blank">Website Link</a>

== Screenshots ==

1. An example of plugin in action (Fotorama Theme)
2. Editing gallery shortcode to use Fotorama Theme

== Changelog ==

= 1.5 =
* Fixed a minor issue related to newer versions of wordpress.
* Updated fotorama theme to version 4.6.4.
* Added keyboard navigation and shuffle display to fotorama theme.

= 1.4.1 =
* Fixed an issue related to plain [gallery] shortcode.

= 1.4 =
* Fixed plain [gallery] shortcode to show all attached images.

= 1.3 =
* Added Fotorama Theme.
* Two fixed issues.