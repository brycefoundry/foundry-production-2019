=== LiveReload Snippet ===
Contributors: functionsfile, chrisguttandin
Tags: LiveReload, javascript
Requires at least: 1.2.0
Tested up to: 3.6
Stable tag: trunk

Add the LiveReload javascript snippet to the footer of your theme.

== Description ==

[LiveReload](http://livereload.com/ "LiveReload") is a Mac OS X menu bar app for web developers. It monitors changes in folders you specify. When a file is saved, the browser will automatically refresh showing the changes.
LiveReload also comes with various preprocessors baked in (LESS, SASS, Compass, Stylus, CoffeeScript, IcedCoffeeScript, Eco, SLIM, HAML, Jade).

You can use LiveReload without [browser extensions](http://help.livereload.com/kb/general-use/browser-extensions "LiveReload Browser Extensions") by adding a javascript snippet to your page. This plugin does just that.

== Installation ==

1. Download the plugin archive and expand it.
2. Put the 'livereload' directory in your WordPress plugin directory.
3. Go to the Plugins page in your WordPress Administration area and click 'Activate' for LiveReload.

== Changelog ==

* 1.2 Separate js via enqueue hooks, use bundled jquery
* 1.1 Unnoticed dead-on-arrivalness fixed, thanks [chrisguttandin](http://wordpress.org/support/topic/parse-error-165)
* 1.0 Initial Release
