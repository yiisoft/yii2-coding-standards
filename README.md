Yii 2 Web Framework Coding Standard
===================================

This repository contains [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) coding standard, rule set
and sniff token parsing classes for the [Yii 2 Web Framework](https://github.com/yiisoft/yii2/). Overally rules
are based on PSR-2 standard with some minor exceptions and changes. Rules derived from PSR-2 standard and excluded
in Yii2 standard were implemented (or planned to be) as sniff classes.

Rules located in this repository could also be used for checking code style of an existing Yii2 applications.
Everything that is merged into main [Yii2 development repository](https://github.com/yiisoft/yii2) being checked
with these rule set as well.

USAGE
-----

* Clone `yiisoft/yii2-coding-standard` repository:

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

* Voila! Now you can check your code:

```
$ ./vendor/bin/phpcs --extensions=php --standard=Yii2 /home/resurtm/work/Yii2MegaApp/
```

USEFUL LINKS
------------

PHP_CodeSniffer:

* [Configration options](http://pear.php.net/manual/en/package.php.php-codesniffer.config-options.php)
* [Manual and guide](http://pear.php.net/manual/en/package.php.php-codesniffer.php)
* [GitHub repository](https://github.com/squizlabs/PHP_CodeSniffer)

Yii2:

* [Coding style](https://github.com/yiisoft/yii2/wiki/Core-framework-code-style) wiki page

ADDITIONAL NOTES
----------------

Feel free to request additional features, submit bugs and problems.

Thank you for choosing Yii Framework!
