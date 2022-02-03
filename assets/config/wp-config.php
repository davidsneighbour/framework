<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

// set all settings in wp-config-local or use the default settings
// from this file.
require_once(dirname(__FILE__) . '/wp-config-local.php');

if (!defined('DB_CHARSET')) {
  define('DB_CHARSET', 'utf8');
}
if (!defined('DB_COLLATE')) {
  define('DB_COLLATE', '');
}

if (!defined('WPLANG')) {
  define('WPLANG', '');
}

if (!defined('FS_METHOD')) {
  define('FS_METHOD', 'direct');
}
if (!defined('DISALLOW_FILE_EDIT')) {
  define('DISALLOW_FILE_EDIT', true);
}
if (!defined('ALTERNATE_WP_CRON')) {
  define('ALTERNATE_WP_CRON', false);
}
if (!defined('WP_POST_REVISIONS')) {
  define('WP_POST_REVISIONS', 10);
}

// lots of issues with this set to true, blocking concatenation can
// help finding the plugin or script that is doing it's own thing
// and fix it
if (!defined('CONCATENATE_SCRIPTS')) {
  define('CONCATENATE_SCRIPTS', false);
}

// set to true in wp-config-access if moving domain or installation,
// then login, go to settings and save once, then set to false again
if (!defined('RELOCATE')) {
  define('RELOCATE', true);
}

///* Custom WordPress URL. */
//define( 'WP_SITEURL',     'http://example.com/blog' );
//define( 'WP_HOME',        'http://example.com/wordpress' );
//define( 'WP_CONTENT_URL', 'http://example.com/wp-content' );
//define( 'UPLOADS',        'http://example.com/wp-content/uploads' );
//define( 'WP_PLUGIN_URL',  'http://example.com/wp-content/plugins' );
//define( 'COOKIE_DOMAIN',  'subdomain.example.com' );
//
//
///* Media Trash. */
//define( 'MEDIA_TRASH', true );
//
//
///* WordPress debug mode for developers. */
//define( 'WP_DEBUG',         true );
//define( 'WP_DEBUG_LOG',     true );
//define( 'WP_DEBUG_DISPLAY', false );
//define( 'SCRIPT_DEBUG',     true );
//define( 'SAVEQUERIES',      true );
//
//
///* PHP Memory */
//define( 'WP_MEMORY_LIMIT', '64' );
//define( 'WP_MAX_MEMORY_LIMIT', '256' );
//
//
///* Compression */
//define( 'COMPRESS_CSS',        true );
//define( 'COMPRESS_SCRIPTS',    true );
//define( 'CONCATENATE_SCRIPTS', true );
//define( 'ENFORCE_GZIP',        true );
//
//
///* CRON */
//define( 'ALTERNATE_WP_CRON',    'true' );
//define( 'WP_CRON_LOCK_TIMEOUT', 60 );
//
//
///* Updates */
//define( 'WP_AUTO_UPDATE_CORE', 'minor' );
//define( 'DISALLOW_FILE_MODS', false );
//define( 'DISALLOW_FILE_EDIT', false );

/**
 * This will log all errors notices and warnings to a file called debug.log in
 * wp-content only when WP_DEBUG is true. if Apache does not have write permission,
 * you may need to create the file first and set the appropriate permissions (i.e. use 666).
 */
if (!defined('WP_DEBUG')) {
  define('WP_DEBUG', true);
}
if (WP_DEBUG) {
  // define('WP_DEBUG_LOG', dirname(__FILE__) . '/hdvisa-thailand.log');
  // define('WP_DEBUG_DISPLAY', false);
  // @ini_set('display_errors', 0);
}
error_reporting(E_ALL);

/** Sets up WordPress vars and included files. */
require_once(dirname(__FILE__) . '/wp-settings.php');
