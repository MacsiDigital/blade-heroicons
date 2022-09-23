# Blade Heroicons

## Heroicons as Blade Components

Heroicons as Blade Componenents

## Installation

You can install the package via composer:

```bash
composer require macsidigital/blade-heroicons
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="MacsiDigital\BladeHeroicons\BladeHeroiconsServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [

];
```

## Usage

``` php
<x-heroicons::v1.solid.academy-cap class="h-4 w-4" />
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
