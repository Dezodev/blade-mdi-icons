# Blade MDI icons

<a href="https://github.com/dezodev/blade-mdi-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-mdi-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/dezodev/blade-mdi-icons">
    <img src="https://img.shields.io/packagist/v/dezodev/blade-mdi-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/dezodev/blade-mdi-icons">
    <img src="https://img.shields.io/packagist/dt/dezodev/blade-mdi-icons" alt="Total Downloads">
</a>


A package to easily make use of [Material Design Icons](https://github.com/Templarian/MaterialDesign-SVG) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [pictogrammers.com](https://pictogrammers.com/library/mdi/).

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require dezodev/blade-mdi-icons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade MDI (Material Design Icons) icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade MDI icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-mdi-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-mdi-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-mdi-antenna/>
```

You can also pass classes to your icon components:

```blade
<x-mdi-antenna class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-mdi-antenna style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-mdi-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-mdi-icons/o-adjustments.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade MDI icons is developed and maintained by Dezodev.

## License

Blade MDI icons is open-sourced software licensed under [the MIT license](LICENSE.md).
