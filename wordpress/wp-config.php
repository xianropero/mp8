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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=b*w}`,h6VAxMy+bN(*N<xc`B$?{T>R2TSP7T_i|Ms<B`FH0TR=hi1=zv!2Tg7 8' );
define( 'SECURE_AUTH_KEY',  ' d_-[9M~&T K9,Jd8_KsV5j5#.G~|#+2WYxL*cA3b+^Ses%ie0*aI@S}7LBh_q)J' );
define( 'LOGGED_IN_KEY',    ',4P[yAkovP[6([I?fJ(qeu-cbCf77RVvY!cawTN#d$_Js<ake?Cv116It.K[$IsI' );
define( 'NONCE_KEY',        '^q.K?XYkT-IAsAHH&5k%EZ.3)%r;]S8Ofyl*+?sLrz2MS3LHM#Y4$e@)#;^Ig7 U' );
define( 'AUTH_SALT',        'Jz&5X]/q+t|fdr.z@zT7WHg`ooE{,g:TXF|`({)cx^Ex$%l326]6#I(y8;O*M*Bt' );
define( 'SECURE_AUTH_SALT', 'Zp1*3_7LkyB(DNY%4tZ9.bslxUV||_|kby8%}|[^8ouwqC!Q]LUGr2iHSr9W}}o6' );
define( 'LOGGED_IN_SALT',   'kFr7wg!SB9vjWRthso2pd9?stg2DYL~=kCP9u-y.h3+FW(x[pyZAi=i.fVnjhL*w' );
define( 'NONCE_SALT',       '*/.N~=<%;qwaUqbrg%$.3I<fSGXT2yu(;1pbWbnmm<vL*wg~8c&~wC6h[*IrQo)8' );

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
