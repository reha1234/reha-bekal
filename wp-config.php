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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|k *_VIgI$LTe<I3ktNAK1x#@qX(*V<E!c!gdccaa.H8geYQjB]{++DjbPk0<o7A' );
define( 'SECURE_AUTH_KEY',  '/]+C Uwn!FjPQXNFaTQX59n0h~g;VU3NRG.e P-kFO(&f oX16xv#lC)|ll#H}*0' );
define( 'LOGGED_IN_KEY',    '!O9B(CNpA<]F^qtv9WF15n}pxnPP=([<*6HF^Fe2vS1LCGBa%aiGR&w8PPbj]?c ' );
define( 'NONCE_KEY',        'W1[*9Ija$Z7KHYM5(^OO@)h#?<x_O(SvQ5h|C:f?A{kGC-x!-`6@_Bw3Nqgr}PKz' );
define( 'AUTH_SALT',        'rY<*8SGhr[JeZwBEO;|$CR7+g`1bdZwhUK*Ko8/*])~(&>r-l-[;;s^4>xbTNAO:' );
define( 'SECURE_AUTH_SALT', 'uMV.G%=-1/<2DbjxVd p)P1=bvB&}cwfqY)ocCagrR:`6z,+faVP6ko(Bm}*xfpn' );
define( 'LOGGED_IN_SALT',   'wM&)hqpvu!Y;KExWK-iM80PuHs`PV&;KS;[EGlO@?gcdM$#D7wpuY*KybkmRq0Yn' );
define( 'NONCE_SALT',       'A]~R_TyXA#<XM%0M$nG~}%yWsJo[=0S)eX(h}]FV)F[3nWK_d5_Ss?Y@b^DLB47+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
