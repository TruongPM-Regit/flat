<?php
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '16091995' );

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
define('AUTH_KEY',         '!u-HRp|IbH3j(}BeJkpK+a#uz)EE4Yo Z-k%+L+-_{wUB-5tgp`z(k%iquc92f^|');
define('SECURE_AUTH_KEY',  '*x@v6/A?LV8_b<w#wn8K:PlQaqOq-07HCMq@U|k1SUzsqtH3P8:OGUA~qL~e[8nK');
define('LOGGED_IN_KEY',    'w`EqZu~-k[:z{Z+ZJ8zn{[uA,5>d%^f[[/bL3tF]1`([z_L&?20Y.JbnCK^>QS]}');
define('NONCE_KEY',        '5HzVIW<gb]65Ix0&DdPt,Qc|A^XmeeFGn.#/oI*q_rN4I}c=<,NZpVzy85- neui');
define('AUTH_SALT',        'Mz$X0za{/o{o;LK-wwWEP7RmbwG`j#[B%@v<fi,!7<b^6+e<uYrvbG)q+|F?w`<%');
define('SECURE_AUTH_SALT', ' |>!tu+}$B)`oIR4+qUF>!voa{,GkF-I[kRAL=?3i[$)1)he<-`4v&D0fh#vvT~t');
define('LOGGED_IN_SALT',   'cZwymoq`<Zc+P*{F%?C`Lz*SKqjF3NYf?7[Ii!?amhSWe&<uIQ5#.yyga;b<#pxJ');
define('NONCE_SALT',       'y$hS.bZX7KG5,fmcsA:lpy-_oEE^6FD7yfW4Y+4;>jy{-I/+<~8{Ptl/6sv|ui++');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
