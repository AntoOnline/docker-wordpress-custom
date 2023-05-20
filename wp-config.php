<?php
// WP_REDIS MUST BE SET FIRST!!!
if (getenv('USE_WP_REDIS') ?: false) {
	error_log("USE_WP_REDIS=true");
	define("WP_REDIS_PORT",  getenv('WP_REDIS_PORT') ?: '6379');
	define("WP_REDIS_HOST", getenv('WP_REDIS_HOST') ?: 'localhost');
	define("WP_REDIS_PASSWORD", getenv('WP_REDIS_PASSWORD') ?: 'password_here');
} else {
	error_log("USE_WP_REDIS=false");
}
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME') ?: 'database_name_here');
error_log("DB_NAME=" . DB_NAME);

/** Database username */
define('DB_USER', getenv('DB_USER') ?: 'username_here');

/** Database password */
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'password_here');

/** Database hostname */
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
error_log("DB_HOST=" . DB_HOST);

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', getenv('AUTH_KEY') ?: 'put your unique phrase here');
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'put your unique phrase here');
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: 'put your unique phrase here');
define('NONCE_KEY', getenv('NONCE_KEY') ?: 'put your unique phrase here');
define('AUTH_SALT', getenv('AUTH_SALT') ?: 'put your unique phrase here');
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'put your unique phrase here');
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'put your unique phrase here');
define('NONCE_SALT', getenv('NONCE_SALT') ?: 'put your unique phrase here');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('TABLE_PREFIX') ?: 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', getenv('WP_DEBUG') ?: false); // Or false

if (WP_DEBUG) {
	error_log("WP_DEBUG=true");
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
	@ini_set('display_errors', 0);
} else {
	error_log("WP_DEBUG=false");
}

/* Add any custom values between this line and the "stop editing" line. */

/** Environment Type. */
define('WP_ENVIRONMENT_TYPE', getenv('WP_ENVIRONMENT_TYPE') ?: 'production');

/** Allow Repair Mode. */
define('WP_ALLOW_REPAIR', getenv('WP_ALLOW_REPAIR') ?: true);

/** Force SSL in Admin. */
define('FORCE_SSL_ADMIN', getenv('FORCE_SSL_ADMIN') ?: true);

/** Disallow File Edit. */
define('DISALLOW_FILE_EDIT', getenv('DISALLOW_FILE_EDIT') ?: true);

/** Empty Trash Days. */
define('EMPTY_TRASH_DAYS', getenv('EMPTY_TRASH_DAYS') ?: 30); // 30 days

/** Enable WordPress Cache. */
if (getenv('WP_CACHE') ?: false) {
	define('WP_CACHE', getenv('WP_CACHE') ?: true);
	error_log("WP_CACHE=true");
} else {
	error_log("WP_CACHE=false");
}

/** Maximum Memory Limit. */
define('WP_MAX_MEMORY_LIMIT', getenv('WP_MAX_MEMORY_LIMIT') ?: '128M');

/** Memory Limit. */
define('WP_MEMORY_LIMIT', getenv('WP_MEMORY_LIMIT') ?: '96M');

if (getenv('USE_FORWARD_PROXY') ?: false) {
	error_log("USE_FORWARD_PROXY=true");
	// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
	// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
	if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
		$_SERVER['HTTPS'] = 'on';
	}
} else {
	error_log("USE_FORWARD_PROXY=false");
}

define('WP_HOME', getenv('WP_HOME') ?: 'https://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', getenv('WP_SITEURL') ?: 'https://' . $_SERVER['HTTP_HOST']);

if (getenv("USE_AWS_CDN") ?: false) {
	error_log("USE_AWS_CDN=true");
	define('AWS_CDN_Isactive', getenv('AWS_CDN_Isactive') ?: '');
} else {
	error_log("USE_AWS_CDN=false");
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
