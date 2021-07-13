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
define( 'AUTH_KEY',         '([Jyw*z_(9(PBFujd8bB;iO+eguSA%rx.L!-])AEhV-k9?Bl<J%Khd/)vevs`TVk' );
define( 'SECURE_AUTH_KEY',  '+Y#vpcC4Oe]Fb.:+H-$#?9`JH!&z`4~yKP%vW%ag;uuV_(Q0x7Z!;lfsL:I_d.jC' );
define( 'LOGGED_IN_KEY',    'Q_?O?mW+Fm|I:<q~-g:}+9m%Sn7eAzE@ZED]19E0o~QjF/BKhEG%z|.B/7}(AiLN' );
define( 'NONCE_KEY',        '#)qKY[0TCbA3qD;PJ+R?}A{()Nh,N[LVJ2n1QG(cn.1A@7f%o)w3@CZ3=|X}RUv0' );
define( 'AUTH_SALT',        'Iyqyn}ay)D[u.w5f|{/%Oyhj1?UYy@jOA%eq:u4@nLj{vIWLOs&||O$nQn08(D(F' );
define( 'SECURE_AUTH_SALT', 'vxk8o&jLdy4l`w89^LNio::+HmG`EWU?OYE&vhv5%Id<dm3y`cw %:A_i*GBj*R|' );
define( 'LOGGED_IN_SALT',   '_NO>oPUDU?mm8]a3fY#$h1YuHSf~yMw 7whCt E1sIcT@gT,4HVXzVOMo^pCFc=Y' );
define( 'NONCE_SALT',       'sd4JyoK^f4VxDuPIe2A[ow8prO*W3}qAEF~Gl^W~d+OgGWA$jA$DKuGZmfhBfZ<z' );

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
