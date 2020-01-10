# WordPress Client Plugin Boilerplate

A WordPress Client Plugin Boilerplate

## Installation

`composer create-project ralfhortt/wordpress-client-plugin-boilerplate my-plugin`

## Setup

- `npm install` or `yarn`
- Edit the plugin header in `plugin.php`
- Replace namespace `RalfHortt/WordPressClientPluginBoilerplate` with your own
- Update autoloader namespace in `composer.json`
- Replace textdomain `wordpress-client-plugin-boilerplate` with your own

## Usage

### PHP

- Services: Add a custom service in `src`
- Function: Add custom function in `inc/functions.php`
- Template Tags: Add custom template tags in `inc/template-tags.php`

### Gutenberg

- `npm run watch` for development
- Add custom blocks in `assets/js/blocks`
- `npm run production` for published code

## Changelog

### 2.0 - 2020-01-09

* Update dependencies

### 1.0 - 2019-10-17

* Initial release
