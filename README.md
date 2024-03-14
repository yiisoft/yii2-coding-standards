Yii 2 Web Framework Coding Standard
===================================

This repository contains settings for [Yii2 coding style](https://github.com/yiisoft/yii2/wiki/Core-framework-code-style)
for various tools.

Getting code
------------

You can get code style definition using one of the following methods.

* Clone `yiisoft/yii2-coding-standards` repository:

```
$ git clone git://github.com/yiisoft/yii2-coding-standards.git
```

* Install `composer.phar` distribution:

```
$ curl -sS https://getcomposer.org/installer | php
```

Or if your system doesn't have CURL installed:

```
$ php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
```

* Set up all dependencies declared in `composer.json`:

```
$ php composer.phar install
```

PHP_Codesniffer
---------------

[PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) coding standard, rule set
and sniff token parsing classes for the [Yii 2 Web Framework](https://github.com/yiisoft/yii2/). Overally rules
are based on PSR-12 standard with some minor exceptions and changes. Rules derived from PSR-12 standard and excluded
in Yii2 standard were implemented (or planned to be) as sniff classes.

Rules could also be used for checking code style of an existing Yii2 applications.

Everything that is merged into main [Yii2 development repository](https://github.com/yiisoft/yii2) being checked
with these rule set as well.

### Using code style

After CodeSniffer is installed you can launch it with custom code style using the following syntax:

```
$ ./vendor/bin/phpcs --extensions=php --standard=Yii2 /home/resurtm/work/Yii2MegaApp/
```

Installation can be also be done automatically with this tool:

```bash
composer require --dev dealerdirect/phpcodesniffer-composer-installer
```

When using Composer 2.2 or higher, Composer will [ask for your permission](https://blog.packagist.com/composer-2-2/#more-secure-plugin-execution) to allow this plugin to execute code. For this plugin to be functional, permission needs to be granted.

When permission has been granted, the following snippet will automatically be added to your `composer.json` file by Composer:
```json
{
    "config": {
        "allow-plugins": {
            "dealerdirect/phpcodesniffer-composer-installer": true
        }
    }
}
```

When using Composer < 2.2, you can add the permission flag ahead of the upgrade to Composer 2.2, by running:
```bash
composer config allow-plugins.dealerdirect/phpcodesniffer-composer-installer true
```

If you're using PhpStorm you can configure it to use CodeSniffer using Settings → PHP → Code Sniffer.
Yii2 code style can be specified at Inspections → PHP → PHP Code Sniffer validation.

### Useful links

* [Configuration options](https://pear.php.net/manual/en/package.php.php-codesniffer.config-options.php)
* [Manual and guide](https://github.com/squizlabs/PHP_CodeSniffer/wiki)
* [GitHub repository](https://github.com/squizlabs/PHP_CodeSniffer)

PhpStorm
--------

Yii uses PSR-12 as code style standard. You can choose these via `Settings` → `Code Style` → `PHP` → `Set from...` → `Predefined Style` → `PSR12`.

ADDITIONAL NOTES
----------------

Feel free to request additional features, submit bugs and problems.

Thank you for choosing Yii Framework!
