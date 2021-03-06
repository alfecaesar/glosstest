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
define( 'DB_NAME', 'glosstest_wp' );

/** MySQL database username */
define( 'DB_USER', 'glosstest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password1234' );

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
define( 'AUTH_KEY',         '>I16D@=E[<^ ig0fiSJQ>]PNQ#_Wv=0]@<x%z W|s~CA}$phe;=?HI+Gu_ZqQPz=' );
define( 'SECURE_AUTH_KEY',  '1<5lD`@|0H)sl>V*;s1Za>Ql47rja]~9)k/oPh/MaPJ;8`99]-Dv.b9jm7Z;Zlts' );
define( 'LOGGED_IN_KEY',    '&Dc<oK6x0EzoDBi_no9L$c]jv_maALt;Ve5d@ji5E_<]CSh@ockgoCK~0kWuv)}Z' );
define( 'NONCE_KEY',        'Pt7(,.[]nQf.vF=D)&vpB6mYCK8X--n]-UUsXpm^~ioSsiB21x(KO9:{vj*sG{/k' );
define( 'AUTH_SALT',        'IETC73ewg=BZbnp[^})g@?9J%.F5v)!-sh.mM53AGN>G$yxZ`0XKBypH@Ex{6P#A' );
define( 'SECURE_AUTH_SALT', '.B-*-; K%?RCxvFk(ga3+~|.A5`ac_Z4AeCd]GPR]fZ$x>ec-(8eL?Vw<74#9k=o' );
define( 'LOGGED_IN_SALT',   'bA<gz0C.YeV{]mPA/F=zMs}uQ:<&8Y!O*6AY_uSi$V6P9k(<&XjI,uS+h.<6!xV[' );
define( 'NONCE_SALT',       'VM?&C_EcRNRqo]H%] r,-;nZu6Q+|E.7<p):5L^_7o4fYr;WUBAbTJKB;MN40np2' );

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
