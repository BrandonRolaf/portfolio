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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'j2 V;S8_hSTwa-7f|W!:BM+8e>1S`5=K`CQu1wIvz2?7k?lZ(e,6SxX#VaO){9yB' );
define( 'SECURE_AUTH_KEY',  '_,xg`oZHC_Uj`vFr|7cw/zvp27]RCRU4E[v_OxYtK&Y?6mumlIOZ$K[BnBp*&Xyu' );
define( 'LOGGED_IN_KEY',    ')gCq1aT`=NBfoL/CG`SDB9NeFr2|?)6Pv-<`V$;]jJNOr,v.0l<H&T/qC?u`(7-e' );
define( 'NONCE_KEY',        'O&gzBc? r7CuQiQ7>cO@79ad5l$>#/#]f6~Vqo*cAq4=xS5wG9*QwFDuPVFY5gP(' );
define( 'AUTH_SALT',        '0ev5-zG,VM2D+K??rle/E8vyowd7Ye/;)~pJ9Gb 4zXN,=)t[1n6LP!|+(|-+L-@' );
define( 'SECURE_AUTH_SALT', '{=Zc8WXrZjkE(HXQVxO8<Z!qx[$O0`SX:J]2{,^DOI(xtPOeff|jahwzZ%oLG%,2' );
define( 'LOGGED_IN_SALT',   '?^!XH7-5K6)%L8quy[n$:8X+b_<?^hH`@x9LiaY^YEZMk{gb$p6Q<,Ps[fY/H&Z{' );
define( 'NONCE_SALT',       '=jW>!Dm|.P p1%j[qxP[@VT0Jqzf,yvi^bu}cq_U+AkZIs6pq!8:wCVlbPjAtW-d' );

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
