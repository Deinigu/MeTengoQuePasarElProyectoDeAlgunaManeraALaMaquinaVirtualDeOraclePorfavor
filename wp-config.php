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
define( 'DB_NAME', 'crmdb' );

/** Database username */
define( 'DB_USER', 'softix' );

/** Database password */
define( 'DB_PASSWORD', 'softix' );

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
define( 'AUTH_KEY',         'cw6}&tzNw1n7^z8hi3vEOQNhWK-2rWorP<F7>uX^pM@FU4[Z~mCm<oczFw3?g.(w' );
define( 'SECURE_AUTH_KEY',  '9N+Yq[}Wn1Vny2et%:(^[|Nl1Na[!3]^QJdKL^&v8o:$4[L+n,3]R,Hy5z)}Pe9t' );
define( 'LOGGED_IN_KEY',    '?7_CqHW7t9_0=O5b1;buLpli,tZ>_)lXRgHzT:CT|$LWY8b|9yp.ucHJn[e{6! I' );
define( 'NONCE_KEY',        '-]:&s^`KRU2wK^,&c65o=&hFPXK{_%WOp-t^M41//X0w*I-Y~`F@5@RadEPs!C6E' );
define( 'AUTH_SALT',        '8|Ie1X(sPo](2Gz_`(<Fa{T6aKh~S$>bfSA.YmHp<KVzsXizb.dxJpB++gfabSEo' );
define( 'SECURE_AUTH_SALT', 'l>*|6uKHwD*%$*zABKwEXln?IQ04L/ H;WMR{V5#,?6Ffq>,>@2fNxd@C-&rFi*K' );
define( 'LOGGED_IN_SALT',   'F6=uVyRZM5[U|[0$lH+Sh%a.dANL%oO8(OoH>|QXlY!>JbSqqk4H+`gYG6Mg<um7' );
define( 'NONCE_SALT',       'rz:Ebgq!Z_Wv]Uzt6p{&UB[GLm|ta-sM)Uz`/-EFX<%<p:ycVm_-APG14rb5*OZ$' );

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
