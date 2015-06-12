# tenant media folder

Using the [hyn-me/webserver](http://github.com/hyn-me/webserver) package will generate webserver configurations
that mount this directory to a public directory.

For instance `dummy.hyn.me/media/logo.png` will be mapped to `storage/multi-tenant/1-dummy-hyn-me/media/logo.png`.
As an example I added logo.png to this directory as well and visit [dummy.hyn.me/media/logo.png](http://dummy.hyn.me/media/logo.png).