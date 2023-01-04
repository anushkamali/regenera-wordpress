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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Password1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://localhost/wordpress' );
define( 'WP_SITEURL', 'http://localhost/wordpress' );

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
define('AUTH_KEY',         ' ;0q/fr#+v^4Pe$hH3e{De%;^%81C0]r|#4.JN- R6.?c1A!NUR@n$570^dx5q7K');
define('SECURE_AUTH_KEY',  '9S/I+j/D T99=/vFu|LO~4)r[58G=|1[Xr-[abI-3/@YqsUs>sqRSl$*dV9X6?p!');
define('LOGGED_IN_KEY',    '+55-IGkaB);veUhO#l+2qsZ{5V7*#ViCy|WkjG~QE.3!%zo_n+]@zHzeJLV*HISZ');
define('NONCE_KEY',        'BO=#`/wG@GvWkxI428s`SE. 1QMr=HGo|;hf(bkRPl$|IbaOpC(B<#P5#BLB(B{q');
define('AUTH_SALT',        'ZCS+kTR]XujTwq9{9OQTvrNl5cC~Glg{+!RjN>$7aR+uL.g7Jm];<oD[{|-b,q(:');
define('SECURE_AUTH_SALT', '&-_q>rfOd&0!Sp;#J[]/%A):>uq1jUUplf]+#vG~|g-i3e>-GqARP,V)a/$(q7+x');
define('LOGGED_IN_SALT',   '=<|r/_*$9B/QjC+Z-Cs$y-]djg_,[bjNWu[:=8W<y@@52gn=C2y8@`C4[9Y|v/QA');
define('NONCE_SALT',       'y |#;fZ)2C*o@ an(nzX|~w9m-, (g_mbo`|sGVXrcM-9u`bNFQKV10<(KT0aaz~');
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
