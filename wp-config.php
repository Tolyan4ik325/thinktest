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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thinktest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/ Wu8As7b}F<&hf3=L(.cDl@BZ#.X~0T<aiixw0zE~yLc*0S-qw/>c$D>rI0a.vZ' );
define( 'SECURE_AUTH_KEY',  '=k-Hc>1=gCGdUSm1rWk__<$`IJp4&^Q#!g}vpJYV>CU)X7J^!@<?k?8ynKBOI)9Y' );
define( 'LOGGED_IN_KEY',    '8Ikqw{mor<(xD&`tl92:83C]NRVi:)mwoIpdduu(jLbjyVyoii_KLP5(6ePTx/wK' );
define( 'NONCE_KEY',        'b&B&]Voo,h&@sw0tn=80BD.Ta%fSv:aO|x=%)&X?p2r<.2|YX#r%_fY*MY-FO15r' );
define( 'AUTH_SALT',        'WHl8Ieb{SI~>aEa)m^7Ig{8&Z1a:.L0n}*bR5~C-fu:8jN|}T>funQ]Va>_U)bQp' );
define( 'SECURE_AUTH_SALT', 'hcl{+3sPeSn$?Qwp18v:e~0H,6V~*SU#&=1Dakt9@Z4iy+ft5[-x4M1v7%.A>Z<H' );
define( 'LOGGED_IN_SALT',   'aqI^QP]oGO7gMpz,q1-&U;$C5<-{Eu.M3R:BOk<n,/bhtlc7gt|2s={kJ-K&x_@%' );
define( 'NONCE_SALT',       '(5SLPsWRtRm!vx82r=ZxKGaQ]F+cTPJ{X(:3>vT3 vDo(J3%.I~4_,rX)}g~deQ0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
