<?php

// a helper function to lookup "env_FILE", "env", then fallback
if (!function_exists('getenv_docker')) {
  // https://github.com/docker-library/wordpress/issues/588 (WP-CLI will load this file 2x)
  function getenv_docker($env, $default)
  {
    if ($fileEnv = getenv($env . '_FILE')) {
      return rtrim(file_get_contents($fileEnv), "\r\n");
    } else if (($val = getenv($env)) !== false) {
      return $val;
    } else {
      return $default;
    }
  }
}

$table_prefix = 'wp_';

if (dirname(__FILE__) === '/var/www/html') {
  // we are on dev/docker
  require_once(dirname(__FILE__) . '/wp-config-docker.php');
  define('PROTOCOL', 'https://');
  define('WP_DEBUG', !!getenv_docker('WORDPRESS_DEBUG', true));
  define('FORCE_SSL_LOGIN', true);
  define('FORCE_SSL_ADMIN', true);
  define('WP_SITEURL', 'https://localhost');
  define('WP_HOME', 'https://localhost');
} else {
  // we are on a stage
  define('DB_USER', '');
  define('DB_PASSWORD', '');
  define('DB_HOST', '');
  define('PROTOCOL', '');
  define('DB_NAME', '');
  define('WP_DEBUG', false);
  define('FORCE_SSL_LOGIN', true);
  define('FORCE_SSL_ADMIN', true);
}

// https://api.wordpress.org/secret-key/1.1/salt/
// <start_salts>
define('AUTH_KEY',         getenv_docker('WORDPRESS_AUTH_KEY',         ''));
define('SECURE_AUTH_KEY',  getenv_docker('WORDPRESS_SECURE_AUTH_KEY',  ''));
define('LOGGED_IN_KEY',    getenv_docker('WORDPRESS_LOGGED_IN_KEY',    ''));
define('NONCE_KEY',        getenv_docker('WORDPRESS_NONCE_KEY',        ''));
define('AUTH_SALT',        getenv_docker('WORDPRESS_AUTH_SALT',        ''));
define('SECURE_AUTH_SALT', getenv_docker('WORDPRESS_SECURE_AUTH_SALT', ''));
define('LOGGED_IN_SALT',   getenv_docker('WORDPRESS_LOGGED_IN_SALT',   ''));
define('NONCE_SALT',       getenv_docker('WORDPRESS_NONCE_SALT',       ''));
// (See also https://wordpress.stackexchange.com/a/152905/199287)
// <finish_salts>
