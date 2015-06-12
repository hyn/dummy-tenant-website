# example tenant website

Please note this repository is simply an example of how the possibilities within one tenant website directory.

In order to make such a structure work you will need the [hyn multi tenancy](http://github.com/hyn-me/multi-tenant) 
package. This package is meant for [Laravel 5.1+](http://laravel.com).

The following structure is possible. Please note that all of these are optional!

- [routes.php](https://github.com/hyn-me/dummy-tenant-website/blob/master/routes.php)
- [providers.php](https://github.com/hyn-me/dummy-tenant-website/blob/master/providers.php)
- [composer.json](https://github.com/hyn-me/dummy-tenant-website/blob/master/composer.json); set up whatever requirements and custom autoloading facilities
- /cache
- /config
- /lang
- /media
- /vendor
- /views