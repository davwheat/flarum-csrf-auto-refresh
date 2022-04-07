# Davwheat CSRF Auto Refresh

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/davwheat/csrf-auto-refresh.svg)](https://packagist.org/packages/davwheat/csrf-auto-refresh) [![Total Downloads](https://img.shields.io/packagist/dt/davwheat/csrf-auto-refresh.svg)](https://packagist.org/packages/davwheat/csrf-auto-refresh)

A [Flarum](http://flarum.org) extension. Automatically refreshes user CSRF tokens to prevent interaction errors after idling.

## Installation

Install with composer:

```sh
composer require davwheat/csrf-auto-refresh:"*"
```

## Updating

```sh
composer update davwheat/csrf-auto-refresh:"*"
php flarum migrate
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/davwheat/csrf-auto-refresh)
- [GitHub](https://github.com/davwheat/csrf-auto-refresh)
- [Discuss](https://discuss.flarum.org/d/PUT_DISCUSS_SLUG_HERE)
