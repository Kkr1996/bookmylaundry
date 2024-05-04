<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'bookmylaundry' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'T:ZM~b7%zwA[DL$d$EN47O;AD;e5-dD<m^)3>ZCQ, .pZHBlQZ=OuIzi/6tzPxg+' );
define( 'SECURE_AUTH_KEY',  '1Lc;MV)6zI[&]?TSh=aK0q_ax!8`5TIQ5!r^j*C~sJkd^,3tyJuBo`[W6VEdd&ag' );
define( 'LOGGED_IN_KEY',    'gT,/TZL^]kck-*X4?0}1`S  /?%tT1n=g~V xNGY,Oc_XaNv_?JXnUkuIZdGeMH@' );
define( 'NONCE_KEY',        '-tSw?clhBCA*mt]MJ+=OB_bq#[Wx1uX>92lV1YS8:D&EWf?{H%:dloA<9zxmybe|' );
define( 'AUTH_SALT',        '>P]5XKxP`:`;ww#4_b.VqM8Z2+aw@`[-xil*evR95=kqdFd*=L)dM:{jNRq~E>u.' );
define( 'SECURE_AUTH_SALT', '.geTHqt^ot`Hh~b`7l~pQWpcpyKtt6dqqSkEOQ@|>Ae~J@EiXbnypz,C7<OyK|a<' );
define( 'LOGGED_IN_SALT',   'ZJaj$o`k0;H{]q#!SB{p69?l,gmM7LFKM3I$}}z5kHnxh7*^0+s.w:ebq&8u~gcq' );
define( 'NONCE_SALT',       'Sr(}TVZ?fnVQW^nm6S~m.H-_XoUps[ka6M (J8qqG&a?(>DC|!<SE[d:D^I=Nr0A' );

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
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
