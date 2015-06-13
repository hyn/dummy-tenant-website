# tenant vendor folder

The vendor folder can be used for two things;

- Packages loaded using the composer file in the root tenant website directory.
- Custom packages that are loaded using psr-0/4 or the classmap directive in the composer file in the root tenant website directory.

After you made changes to dependencies or have added new namespaces, you'll have to run `composer update` or `composer dumpautoload` to
regerenate the `autoload.php` file(s).