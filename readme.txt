=== Josie WP ===
Contributors: Shelob9
Tags: rest-api, json, wp-api, doge, cache
Requires at least: 4.0
Tested up to: 4.0
Stable tag: 0.1.0
License: GPLv2+
Donate Link: http://JoshPress.net

Companion for the Josie REST API-powered starter app. Useful tools for any site using the WP REST API.

== Description ==
This is a companion plugin for my WordPress REST API (WP-API) powered application starter, called [Josie](https://github.com/shelob9/josie). It can be used with any site running the [WordPress REST API](http://wp-api.org/).

It packages multiple libraries, most of which I wrote, to accomplish several things:

 1) [Provides a soft-expiring, server-side cache for requests to the REST API.}(https://github.com/shelob9/jp-rest-cache).
 2) [Adds routes and endpoints for making tax-queries.](https://github.com/Shelob9/jp-tax-query).
 3) [Adds routes and enpoints for getting menus & menu items](https://github.com/Shelob9/jp-menu-route).
 4) [Adds cross-domain headers, and for the posts endpoint allows for page offsets and limits the number of posts_per_page.](https://github.com/Shelob9/jp-rest-access).

== Installation ==

1. Unpack the entire contents of this plugin zip file into your `wp-content/plugins/` folder locally
1. Upload to your site
1. Navigate to `wp-admin/plugins.php` on your site (your WP Admin plugin page)
1. Activate this plugin

OR you can just install it with WordPress by going to Plugins >> Add New >> and type this plugin\'s name


== Frequently Asked Questions ==
For more information about what this plugin does and how to modify its behavior, please see the READMEs for each of the libraries that make it up.

== Screenshots ==
1. screenshot-1.png

== Changelog ==
= 0.1.0 =
Initial release.

== Upgrade Notice ==
= 0.1.0 +
Initial release.
