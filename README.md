# Orchid CMS Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/admin-kit/cms.svg?style=flat-square)](https://packagist.org/packages/admin-kit/cms)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/admin-kit/cms/run-tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/admin-kit/cms/actions?query=workflow%3Arun-tests+branch%3A1.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/admin-kit/cms/fix-php-code-style-issues.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/admin-kit/cms/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/admin-kit/cms.svg?style=flat-square)](https://packagist.org/packages/admin-kit/cms)

Пакет для быстрого создания моделей и сущностей в админ панели

## Installation

You can install the package via composer:

```bash
composer require admin-kit/cms
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="cms-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="cms-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="cms-views"
```

## Usage

```php
$cms = new AdminKit\Cms();
echo $cms->echoPhrase('Hello, AdminKit!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anastas Mironov](https://github.com/ast21)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
