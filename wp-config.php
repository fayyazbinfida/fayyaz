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
define( 'DB_NAME', 'fayyaz_db' );

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
define( 'AUTH_KEY',         'fr1|vm0mjS4k.}WYj6O]#3y I05r(!+#}K2MB2.s^35G9vbis+[<DMiwH]s4Iv<e' );
define( 'SECURE_AUTH_KEY',  'H86l9*5FWZIT_[1<aFSaroaGj,erXq3*oh>!J)*$56J I/Yn;-by1<g!{Vfgy]]#' );
define( 'LOGGED_IN_KEY',    '9$.m9Na rxLI^@U{wg2%7&R?.z$h7dTVmR65Vb(Eo5>jcr%QCW+|n%]*X/M8(0~y' );
define( 'NONCE_KEY',        'Po_8uGkwBu{=/iD)Nf%R3>NSL~e$ts;Hy~G7$f^Ah}1uP0E[754Z8Wm~hn5!nxaA' );
define( 'AUTH_SALT',        ':vY[~~OE*h!l/LU6,Z1bN>Ozt ^L,9Xfx-+!Dzrd`9jhz&vc>.=SGgVVAL)->NE6' );
define( 'SECURE_AUTH_SALT', 'JpyRm!qT;UA*;PGC72Be=(k!Mhooh//y< h]e!CGBE^6rO|cSjmQA4/Vm)1>Bn$O' );
define( 'LOGGED_IN_SALT',   'dY-.vulP1O~17Q!jj{v)mx33<qkL-`o+8~7XH6`M5sn}/#yon6#axNv=.i,O%]IL' );
define( 'NONCE_SALT',       'IAly!5&mP$s#^>I@;+h?`=HrayN<6RAL1Q/*_V,XVZR#jk}RZ$z _nJUtf~/8e12' );

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
