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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u1551950_default' );

/** MySQL database username */
define( 'DB_USER', 'u1551950_default' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FZj2R6cI13kKH3dz' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'a@p?ccs)9C)j57n%{)q~rd/k%$N_03Bsj)r-LhARl,iSXL)=s^N.Wr#2uqezv]M@' );
define( 'SECURE_AUTH_KEY',  '3jUyv^~l@O*3pk:D#VW,:H6D W.C?2&H15]{2x)+SJH{~M!6WN|wIg]Kr(D;e[8)' );
define( 'LOGGED_IN_KEY',    'p+RG2FKY/r+.g-Wfo39L{!gydnWV*<ez|L>HiW3a+/IM3?_ogLa4N|b4I)JRGf0<' );
define( 'NONCE_KEY',        'pUuSK|J9 BKI(ZWtmOGH1$x@;ZKxc3H$6Gkq(v_j<<NGF,g8>oo|BXYu&QRm]Wrs' );
define( 'AUTH_SALT',        ';LXBEe6o%&RD+vk95_zVC3XkcWNn 6z|1JJp5<I+I4<6F^VP:DBC5OVk8R3W!tov' );
define( 'SECURE_AUTH_SALT', '9#bw.?;wRub2DQ9hbn%hLi#w_>Q)2|A[B<xs8HK@t1){bg>x_r{Yt&/+q%pxF:XL' );
define( 'LOGGED_IN_SALT',   '?)T7&.aW70FlOZg0c7D2_a#?+67Gc/. C]z% Ehw*{kaddx4=[IJ&b]1JJ1NSS9d' );
define( 'NONCE_SALT',       'Z rVwU @<7;y[LT:=%jMBmDfl21f5:<kKYj!mCvG04ZIH*^avHMkkIoCXi=FVRCj' );

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
