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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'birdblokes' );

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
define( 'AUTH_KEY',         '~Inf/6jGk_8@Ls:HJ7T^OW!O2^T%H`;}ZM>R1iZ#FpAY$5$3CA3/{=>u8Aw[6ZaE' );
define( 'SECURE_AUTH_KEY',  '<}?xe!S$wm.~e}Jjqs-|pb#yRGx3:ZA(A=J4M[:&kIkP)(JBdL?n G@R,&nEEaZ%' );
define( 'LOGGED_IN_KEY',    '=,apv^68Zs6xP1= ]qTi{}/>m#H>6u[Ol%=;kQH hrM{_T}q7h*ud/A/V4et,Fh_' );
define( 'NONCE_KEY',        '|W9Nnr+G!/j-nRO(t.5XK{{vALOFWT<bYDJPW5l-5Z[44kV]*f*3]^nFBbzi8Wx5' );
define( 'AUTH_SALT',        'Av9=JIS03d`hW&.J-^3VVE~~<~YTOpgBwJ{tkPh+ID+L-x||~}bAPSYu,VG;$=#R' );
define( 'SECURE_AUTH_SALT', 'J3za|-D:MbXJ!.,BLy#LG7aH;s2+5%?J[`0kx2c0`![lqnw[?SOg#zTq L-WVLLD' );
define( 'LOGGED_IN_SALT',   'oXj*x0MBIYQiF_.6h.V7@{bjwR0!d*HoN/@)L`+fBn3r%4W&N$@9nMM++5:Ro,;w' );
define( 'NONCE_SALT',       '(1sO]F%gs~-z^MI>x{9-$A4BAch2f+NF/R;;R+7pp$A{%T|#,0he6;Bh=7q;ik!a' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
