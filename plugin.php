<?php
/**
 * Plugin Name:     WordPress Client Plugin Boilerplate
 * Plugin URI:      https://horttcore.de
 * Description:     A WordPress Client Plugin Boilerplate
 * Author:          Ralf Hortt
 * Author URI:      https://horttcore.de
 * Text Domain:     wordpress-client-plugin-boilerplate
 * Domain Path:     /languages
 * Version:         2.0
 *
 * @package RalfHortt/WordPressClientPluginBoilerplate
 */

namespace RalfHortt\WordPressClientPluginBoilerplate;

use RalfHortt\Plugin\PluginFactory;
use RalfHortt\TranslatorService\Translator;
use Horttcore\Assets\EditorScript;

// ------------------------------------------------------------------------------
// Prevent direct file access
// ------------------------------------------------------------------------------
if (!defined('WPINC')) :
    die;
endif;

// ------------------------------------------------------------------------------
// Autoloader
// ------------------------------------------------------------------------------
$autoloader = dirname(__FILE__).'/vendor/autoload.php';

if (is_readable($autoloader)) :
    require_once $autoloader;
endif;

// ------------------------------------------------------------------------------
// Bootstrap
// ------------------------------------------------------------------------------
PluginFactory::create()
    ->addService(Translator::class, 'wordpress-client-plugin-boilerplate', dirname(plugin_basename(__FILE__)).'/languages/')
    ->addService(EditorScript::class, 'wordpress-client-plugin-boilerplate', plugins_url('/dist/js/wordpress-client-plugin-boilerplate.js', __FILE__), [], true, true)
    ->boot();
