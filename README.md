<h1 align="center">
  <img src="icon.png" alt="Icon"/>
</h1>

<a href="https://packagist.org/packages/richardDobron/blade-google-material-symbols-700">
    <img src="https://img.shields.io/packagist/v/richardDobron/blade-google-material-symbols-700" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/richardDobron/blade-google-material-symbols-700">
    <img src="https://img.shields.io/packagist/dt/richardDobron/blade-google-material-symbols-700" alt="Total Downloads">
</a>

# Blade Google Material Symbols

A package to easily make use of Google's Material Symbols in your Laravel Blade views.  
For a full list of available icons you can preview them at [Material Symbols](https://fonts.google.com/icons?icon.set=Material+Symbols).

```bash
composer require richarddobron/blade-google-material-symbols-700
```

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

As Material Symbols offers a lot of different styles, you can choose a specific one by using the corresponding package.  

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-gms:700-fact_check-fill-outlined/>
```

You can also pass classes to your icon components:

```blade
<x-gms:700-fact_check-outlined class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-gms:700-fact_check-fill-rounded style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-material-symbols-700 --force
```

## Configuration

Blade Material Symbols also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-gms.php` config file:

```bash
php artisan vendor:publish --tag=blade-material-symbols-700-config
```

## Blade Icons

Blade Material Symbols uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/driesvints/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/driesvints/blade-icons#caching) with this library.

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-material-symbols-700/star-fill-outlined.svg') }}" width="10" height="10"/>
```

## Maintainers

Blade Material Symbols is developed and maintained by Richard Dobroň.

## License

Blade Material Symbols is open-sourced software licensed under [the MIT license](LICENSE.md).