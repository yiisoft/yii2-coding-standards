<p align="center">
    <picture>
        <source media="(prefers-color-scheme: dark)" srcset="https://www.yiiframework.com/image/yii_logo_dark.svg">
        <source media="(prefers-color-scheme: light)" srcset="https://www.yiiframework.com/image/yii_logo_light.svg">
        <img src="https://www.yiiframework.com/image/yii_logo_light.svg" alt="Yii Framework" height="100px">
    </picture>
    <h1 align="center">Coding Standard for Yii 2</h1>
    <br>
</p>

This package provides the [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer) coding standard used by
[Yii2](https://www.yiiframework.com/) core and official extensions. The ruleset is based on PSR-12 with the
Yii-specific exceptions documented in the [Yii2 core code style](https://github.com/yiisoft/yii2/blob/master/docs/internals/core-code-style.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-coding-standards.svg?style=for-the-badge&label=Stable&logo=packagist)](https://packagist.org/packages/yiisoft/yii2-coding-standards)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-coding-standards.svg?style=for-the-badge&label=Downloads)](https://packagist.org/packages/yiisoft/yii2-coding-standards)

Installation
------------

> [!IMPORTANT]
> - The minimum required [PHP](https://www.php.net/) version is PHP `7.4`.
> - The minimum supported PHP_CodeSniffer version is `4.0.2`.

The preferred way to install this package is through [Composer](https://getcomposer.org/download/):

```shell
composer require --dev --prefer-dist yiisoft/yii2-coding-standards
```

To register the `Yii2` ruleset automatically, allow and install the
[PHP_CodeSniffer Standards Composer Installer Plugin](https://github.com/PHPCSStandards/composer-installer):

```shell
composer config allow-plugins.dealerdirect/phpcodesniffer-composer-installer true
composer require --dev dealerdirect/phpcodesniffer-composer-installer:^1.0
```

Usage
-----

Check a project with the `Yii2` coding standard:

```shell
./vendor/bin/phpcs --extensions=php --standard=Yii2 path/to/project
```

Automatically fix supported violations with PHP Code Beautifier and Fixer:

```shell
./vendor/bin/phpcbf --extensions=php --standard=Yii2 path/to/project
```

Without the Composer installer plugin, reference the ruleset by its installed path:

```shell
./vendor/bin/phpcs --extensions=php --standard=vendor/yiisoft/yii2-coding-standards/Yii2 path/to/project
```

You can also extend the standard from a project-level `phpcs.xml` or `phpcs.xml.dist` file:

```xml
<?xml version="1.0"?>
<ruleset name="Project">
    <rule ref="Yii2"/>

    <file>src</file>
    <file>tests</file>
</ruleset>
```

Then run PHP_CodeSniffer without additional arguments:

```shell
./vendor/bin/phpcs
```

PhpStorm
--------

Configure PHP_CodeSniffer under `Settings` → `PHP` → `Quality Tools` → `PHP_CodeSniffer`. Enable the inspection
under `Settings` → `Editor` → `Inspections` → `PHP` → `Quality tools` → `PHP_CodeSniffer validation`, and
select the `Yii2` coding standard.

## Documentation

- [Yii2 core code style](https://github.com/yiisoft/yii2/blob/master/docs/internals/core-code-style.md)
- [PHP_CodeSniffer documentation](https://github.com/PHPCSStandards/PHP_CodeSniffer/wiki)
- [PHP_CodeSniffer configuration options](https://github.com/PHPCSStandards/PHP_CodeSniffer/wiki/Configuration-Options)

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?style=for-the-badge&logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

## Follow updates

[![Official website](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=for-the-badge&logo=yii)](https://www.yiiframework.com/)
[![Follow on X](https://img.shields.io/badge/-Follow%20on%20X-1DA1F2.svg?style=for-the-badge&logo=x&logoColor=white&labelColor=000000)](https://x.com/yiiframework)
[![Telegram](https://img.shields.io/badge/telegram-join-1DA1F2?style=for-the-badge&logo=telegram)](https://t.me/yii_framework_in_english)
[![Slack](https://img.shields.io/badge/slack-join-1DA1F2?style=for-the-badge&logo=slack)](https://yiiframework.com/go/slack)
