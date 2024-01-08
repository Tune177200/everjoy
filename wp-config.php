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
define( 'DB_NAME', 'everjoy' );

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
define( 'AUTH_KEY',         'BB3*}R;EIva>;{GXJ`NTiJ+|Hch)/o[<RH^yOoTU.c`=(&``>D:m5=?NLy_Pssa/' );
define( 'SECURE_AUTH_KEY',  'U:$zuxR!uo.#0>i?&hREXr$&QV4Ecaur~A7NpXp=?4oeqItsl|i/!sdD)=Q[A#$q' );
define( 'LOGGED_IN_KEY',    'Brpn2pkg`-tc1(W^o[4guvU~%:Q^Au:$a__9/a]Q^EAH|g`DHj0z4S[,ARzc/by#' );
define( 'NONCE_KEY',        ')?]O%V7jbJ(6s9/O;e!~A<8dnky[A6otP0wjr3)qU[E)+?@lI&tX]`2C%P-O`L~r' );
define( 'AUTH_SALT',        'p9:0w-zqhpKR8vSA0VtMi+_uUkdqF>NDO!XlU:j;4ud4l&a[-c~Am2|iJks?aY<=' );
define( 'SECURE_AUTH_SALT', '$[8<[f`8H~8SDBu3)<2q>.MeSR-pi4n[mkioPsLg:w_3mISPgau`V|cS?+;;3!jx' );
define( 'LOGGED_IN_SALT',   'D]tibT*_-WMQ<bZp4Kku>[@GT+=`$Qo-1%G0xh]4[&jh?@Kf.@%$dyt^+]:x+<g7' );
define( 'NONCE_SALT',       'KeZqf^MWV>qB Pc(||*D45)Wtc=P`x>N:<5.$TIU:@.8,lL[7tf1x2iTY3 L{&gF' );

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
