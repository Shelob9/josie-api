<p style="display:inline-block;text-align:center;"><img src="https://github.com/Shelob9/josie/blob/master/img/josie.jpg"  /></p>
Adds endpoints for menus & tax-queries, as well as a server-side cache and CORS headers for the WordPress REST API.

Provides useful tools for optimizing a WordPress site to power a single page web app using WordPress REST API. Designed to work as a companion for the [Josie REST API-powered starter app](https://github.com/shelob9/josie) but useful for any site using the WordPress REST API.

This is a companion plugin for my WordPress REST API (WP-API) powered application starter, called [Josie](https://github.com/shelob9/josie). It can be used with any site running the [WordPress REST API](http://wp-api.org/).

It packages multiple libraries, most of which I wrote, to accomplish several things:

 1) [Provides a soft-expiring, server-side cache for requests to the REST API](https://github.com/shelob9/jp-rest-cache).

 2) [Adds routes and endpoints for making tax-queries](https://github.com/Shelob9/jp-tax-query).

 3) [Adds routes and endpoints for getting menus & menu items](https://github.com/Shelob9/jp-menu-route).

 4) [Adds cross-domain headers, and for the posts endpoint allows for page offsets and limits the number of posts_per_page](https://github.com/Shelob9/jp-rest-access).
 
### Installation
If installing via this repo, be sure to run `composer update`, or this plugin will do nothing.

You can [a packaged version from WordPress.org](https://wordpress.org/plugins/josie-api/) that has all the dependencies included for you, or install it via the WordPress installer.

### Issues & Pull Requests
Since this plugin's actual code is in multiple Composer libraries, pull requests and issues should be submitted to the individual GitHub repos foreach.

### License, Copyright etc.
Copyright 2014 [Josh Pollock](http://JoshPress.net) & [Josie Jayourba-Pollock](https://raw.githubusercontent.com/Shelob9/josie/master/img/josie.jpg).

Licensed under the terms of the [GNU General Public License version 2](http://www.gnu.org/licenses/gpl-2.0.html) or later. Please share with your neighbor.
