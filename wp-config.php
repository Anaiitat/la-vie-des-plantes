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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'thQ3V4duUVlQdWz!+8#sFdJIEY!#85cPeR34G:;q~-k%7Y8`FpjHp[,QQMTi!n|P' );
define( 'SECURE_AUTH_KEY',   'hYl60y qKZ]=J3;UhO4P!hcOqI2EegLnY}?C&rHqD=F2-UsKg[iJ=EVry0:,JZW`' );
define( 'LOGGED_IN_KEY',     '/#9OctJGK5M*AohcpTv8*8QF7ViN vOBl!z*Bp{L`cL4 nP[.g#ubqW{&T}1bVNz' );
define( 'NONCE_KEY',         'gPXWpFr5U9AbkY7=+#.~w4=/Qm9f1j/fxu91Y-/y{V8vn&1 }>|$b(>4)wN2p6y0' );
define( 'AUTH_SALT',         '^55(5t&-Sc` 3m<-nYz& ^/Jo*PxRp?vdow!!<R{)?Pr~7bUR3nv$8kl25h/y]{N' );
define( 'SECURE_AUTH_SALT',  'qwpEsMhl</y<-3s3)^!9:6#3=_8|V7wg8C:*AfF<1@B]PS4lAeUuC|F+?kHdBrC4' );
define( 'LOGGED_IN_SALT',    '|]A(0@/f^?#MK@uuwVK@{#f:?g^#E>pH[d?!zyLUNd0X4O;ATTzKq0/2NwTl!#@=' );
define( 'NONCE_SALT',        'Po6l~5*#X;6wEeLK3UI0BaK[9Y%E>mORV1rvAoWH3{GB?,gQ$^,y)$C!GbuZaTvJ' );
define( 'WP_CACHE_KEY_SALT', ';ngX9ML(Cv;LirqRS[F@-yVM2i|0itQWK&:*_KPe@UOh;i-9+~B| 7NHD!%A`-`5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
