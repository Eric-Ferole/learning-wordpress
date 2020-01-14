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
define('AUTH_KEY',         '5p4DC7kVgWWNfatY1lh1qyqMg8v4RUJ5Pj/V2yOf2ZVbYkOkEv09JU4K5qrfntQ1bUClBR2dn/Rnb171FIYqPg==');
define('SECURE_AUTH_KEY',  'm33OwAMMSYsqCg7nPSXta0j2jJoI54mY7U8dhHw+pgHqoTuv+sFdxQ1MdgqMffLCE2aivGPRM7POxXaJa23M7Q==');
define('LOGGED_IN_KEY',    'ZgkD7jRawFqg+2YMrTyHkheVhDNuCyFsQ0jlu4vstJyr2X895aQKYgUG92ja0bYal7oRtnyFq0QhTIjXFS6KqA==');
define('NONCE_KEY',        'qmod2hcPGyb2RRlcbrc/3DEzZguQCXKFRnL9H0vIvvMbrzk9Jt/3gDJnAmTfiBhme/3uGa8kjui1SFyzlLgCXw==');
define('AUTH_SALT',        'ckdP92XSjsYcamFi+qOBh3CHhUGyeAYLM0eIZBu2CL5Uj4zduiZbWM5jOu2DcVK4tseFjKvMCF2ek0TV/cqT4w==');
define('SECURE_AUTH_SALT', 'a3RO6HFPIKUB5uMpqtlOQqUREoLL9QSfe7/E5pbnXRiFuvL2JoWr+Vqt2YEce8bl+6VhIxzQR0EUmJTZH8BCpg==');
define('LOGGED_IN_SALT',   'W/VULw+OZz4QAp6JaKgY0LPVgMxHievUYQJU1Yh+SkSTsxSzWcD/vlGVCIqKYpelx2UuQxq2CTDqB5mvGOjbEA==');
define('NONCE_SALT',       'ZAQZNWm+Z8nFSzBvxPw/veQGc5EoExjaqxaFO9xyF4b6wBJlAlmBCRUPkMnkFrL8Tpf7sp0wpJI0dhPYGWF9mw==');

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
