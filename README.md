# WordPress Custom Post Type Boilerplate

A WordPress Custom Post Type Boilerplate

## Installation

`composer create-project ralfhortt/wordpress-custom-post-type-boilerplate my-post-type`

## Setup

- `npm install` or `yarn`
- Edit the plugin header in `plugin.php`
- Replace namespace `RalfHortt/WordPressCustomPostTypeBoilerplate` with your own
- Update autoloader namespace in `composer.json`
- Replace textdomain `wordpress-custom-post-type-boilerplate` with your own

## Usage

### PHP

- Services: Add a custom service in `src`
- Function: Add custom function in `inc/functions.php`
- Template Tags: Add custom template tags in `inc/template-tags.php`

### Gutenberg

- `npm run watch` for development
- Add custom blocks in `assets/js/blocks`
- `npm run production` for published code

## ToDo

- Setup script
- Listing blocks
- View files

## Changelog

### 0.1 - 2020-01-09

- Initial release
