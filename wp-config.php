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
define( 'DB_NAME', 'transport' );

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
define( 'AUTH_KEY',         'M{pL[(.w[&;Uyfx|}9vlPm2fa0|N|<N|B(.(gI|g_f_RSx=`/j=BtHKqy!0:X6yw' );
define( 'SECURE_AUTH_KEY',  '-Pu=WDu.87;N~m{)/GO0LcvgBO$;XxN$c:2-9]ck;zX8[=9^<k!dB6xNib3sik&H' );
define( 'LOGGED_IN_KEY',    'F@qlWsWe`W4<!9|VTBq^MZ5#8uy2$$7 IX7~~!).u~7xXuku Q*/pHBpTg %e3!?' );
define( 'NONCE_KEY',        '+b^Rn-NVI+qP7@cgX}?:C1`XXB}3d_e<p=_[*AzDb|R,xT/(A`q19vNv^G>`~v#j' );
define( 'AUTH_SALT',        'u)d+T[d,2:#SJ?ET<#uX20q4dwjerE@Qg(ZW*uH%KtA17~)Be6l[]7? j^4]-}y5' );
define( 'SECURE_AUTH_SALT', 'GBMJE[klyAxsJC-Yf&qL-<3-~j^>} [%W+%dq`_>KmV)KCF?!AI>3is=0PhW!SWo' );
define( 'LOGGED_IN_SALT',   'OyoRtJH)Wah~)LB)fC~(<},bIucZ/<dAYGmrItVJ?9`Ad[/7LGl&%t ^u<gYJ2TO' );
define( 'NONCE_SALT',       'o(ZdramH!_*N0HOD5GCpxHE1NMw=dvL)m+tBF.lK*FN9P{=5nXNO*@(!{)QXMcHF' );

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
