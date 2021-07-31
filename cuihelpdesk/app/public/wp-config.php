<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C5y4k1N1PNsLzVg1MxAOMRUWkmXS9vUJUuQ2EYiB8mbvjrD3L2dZDnC2kMjU1i7ZPCUfuXoYQypmpSbXVSgcYQ==');
define('SECURE_AUTH_KEY',  'v5TT5br9hkkz0/y+Q+aeadYO6FOVMJwnsG1X6k9cop+2vzJoxBOh6SCq35Jgq4LHg2MdJFqMc6XE7rZbS2SiKg==');
define('LOGGED_IN_KEY',    's6eOBT7qZIm+b/28n3R/a8FvTLrRINgKkybtIastYYKmQKllF6HxD76GnO2qGSiY5tYJ3ibBhetV0ywPfFbTuw==');
define('NONCE_KEY',        'PNGm7N0WaNyCJb9DHb0GSeTYLqJL9Th0ICkheAmY7hMNTitssCu4QSUHbZCYIJj9rsRvXU5WqJBiwhYzR1XZaQ==');
define('AUTH_SALT',        'nDbbSnbFs1MVOTQ5JJJR217OIlqg1wx+ZjviJeoB3FP885e8MeSRwpzbOw/7DBDcuuCtkKvZTcS2i59ohruVdg==');
define('SECURE_AUTH_SALT', 'oQrNDFzcJg/ZcHotIJNWviHwOObUUxW+XNf3GUsdMISyEwMCZ3hiydQyhcTsIgjOgoTcq0o3s4FporzCgJZpcQ==');
define('LOGGED_IN_SALT',   'EM/+ZppkVnUXvxXeuhyt12ZuSRXLOWh1maQ1bmqLClBMhBaS++o4UpUULGi+K+f1zdmMfDvW0CJZzc8oRj0nrQ==');
define('NONCE_SALT',       'wGwoRZhLG5pN02CINyVH9Gs1F96yO+W93bH/bvqcJcZN7DOrDTaPMsBTqN3E7YE+ZSdXqm074W3tTPKRZlXaXQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
