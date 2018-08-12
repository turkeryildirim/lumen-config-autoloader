# Lumen Config Autoloader

This package provides an easy way to autoload config files from your application's config folder.

With default Lumen installation, you have to add a line into `bootstrap/app.php` file with `$app->configure('...');` to load package's config file for each composer or custom package.  At the beginning may be you don't know that but i mostly forgot to do that.

## Installation
* Install the package via composer
``` bash
composer require turkeryildirim/lumen-config-autoloader
```

* Create a folder named `config` in your application's root.

## Usage
You just need to copy 3rd party packages config files into **your** config folder or you can use [Lumen vendor publish](https://github.com/laravelista/lumen-vendor-publish) package.

## License
Lumen Config Autoloader is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)