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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&oW/eiG:x:b3>69zv^L[nG[R0v#A_]^7s6OfRYp&t/D=(xNq@G0_VPs-%N7.vs4[' );
define( 'SECURE_AUTH_KEY',  '?BN17=F(;b<|bRQJt*Ium?u_`/0C8BkcN#5;o<wH52z1UO}kP9-C;$@,X6h0a ;U' );
define( 'LOGGED_IN_KEY',    'M_:-R{l2~]J(ULg/Q4Y!8!PM#/`)wSe?@qgT04Fs pd1@an-^303cBL9P/t3E)Jd' );
define( 'NONCE_KEY',        'o_]U[smT4Ii#S{=03XCtvqUXr$KDGr@y{a5|31n[:Ca?h}[/H-N&r$Gbv%w;qJA ' );
define( 'AUTH_SALT',        'z[U7[h=#~AiX.Rhj`3lb^Y?lBL9I6 {@t2UBp9;v(**U#Ct--aR|e#*BRU}3Z^N)' );
define( 'SECURE_AUTH_SALT', 's^N+Lj6*)v3gG4c{[OAZhzD)[_610gvG(_Q,:S{CviIi3xrB5(^rsAe.<:R4()/c' );
define( 'LOGGED_IN_SALT',   'l0oD1B.putGm01J<Z%@n2/q(dy[|+M+Xe9G?pD6(ut/}X%Z}vEE*/Uq3O]^kO#{D' );
define( 'NONCE_SALT',       '_E~H,yrwv_;Awqy_mW}ON#]B-O2fFP68J8Ud&abeKIy^g(JVUf<eryLI&?2b!)Wm' );

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
