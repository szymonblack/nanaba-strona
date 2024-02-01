<?php

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', '0ukOLtEbcmK0zpNGD9zN8g==' );

define( 'WP_CACHE', true );







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
define( 'DB_NAME', 'zhzpzkxytx_wp2' );

/** Database username */
define( 'DB_USER', 'zhzpzkxytx_wp2' );

/** Database password */
define( 'DB_PASSWORD', 'R_PaN#dPzJPpzC8arj(56&@4' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'iZXkNSHk1SurbUldJCDqNgAnHhL4GNcwQVzsdRMEUAdDmT0zqjxtOeuS38OmSF7X');
define('SECURE_AUTH_KEY',  '12gad5tDZpkvxY31Yjc5ncoUS1UlAENXBpV2tAUfbkKIj2AQZHlvtEfwTnt8DzsW');
define('LOGGED_IN_KEY',    'oUNgny77I1iL64SXqPhQP6G5coODEydvnYHkr21SlKlJUmfYZaHx8H4zjA5z8iRQ');
define('NONCE_KEY',        'uaPKNMjkNQoj52D0m5hsRpMzAFuAuKa9vR0nuqjgfvOmIdIwkhtRgfSvM8fGqwIs');
define('AUTH_SALT',        '4pv0ms2I6ot5sF8PdXLtoH2LtjE1qBxhJPzFUZ9hamruOdt1TkGsYI0An9lJalUr');
define('SECURE_AUTH_SALT', 'Srzl6FX74wpNMXfdhP1boMf22WQxyew5XtB0gZLqrZOoq6WtDnUHfME45e3RpWlp');
define('LOGGED_IN_SALT',   'EfvwWjG3ETth4L5wqAU5WX1dufAwC90o65zoKtb0C05Jj9lcKxv90HhsTDPrqWtN');
define('NONCE_SALT',       '0yNZwqNjkuQ9vlKNJjnf7zDTptqhnbLxFwCSdYyVWZyOOjW7jBDBB46Ra5iF6pfK');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
