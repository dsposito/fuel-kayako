# Fuel Kayako Package

A Fuel package for Kayako's Helpdesk PHP API Library.

## About
* Version: 1.0.0
* Author: Daniel Sposito

## Installation

### Git Submodule

If you are installing this as a submodule (recommended) in your git repo root, run this command:

	$ git submodule add git://github.com/dsposito/fuel-kayako.git fuel/packages/kayako

Then you you need to initialize and update the submodule:

	$ git submodule update --init --recursive fuel/packages/kayako/

### Download

Alternatively you can download it and extract it into `fuel/packages/kayako/`.

## Usage

```php
$users = kyUser::getAll()->filterByEmail("me@domain.com");
```

For more usage examples, check out the [Kayako API Docs](http://wiki.kayako.com/display/DEV/PHP+API+Library).

## Configuration

To use this package, first you need to enable the API Interface in your Kayako installation. To enable the API Interface, login to Admin Control Panel and in the Options panel on the left choose REST API, and then Settings. Next, set Enable API Interface to Yes and confirm the change by clicking Update button. 

Next, copy the `config/kayako.php` from the package into your `app/config/` directory. Open it up and enter your API url, key, and secret key (you can find these details in Admin Control Panel by clicking REST API and then API Information in the left Options panel).

## Updates

In order to keep the package up to date simply run:

	$ git submodule update --recursive fuel/packages/kayako/
