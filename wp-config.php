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
define( 'DB_NAME', 'owlsrfoi_store' );

/** Database username */
define( 'DB_USER', 'owlsrfoi_store' );

/** Database password */
define( 'DB_PASSWORD', 'C#=So@;o^#kQ' );

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
define( 'AUTH_KEY',         ';tM,6cf/d>_/nQjH!Tp DE6Y;F[q_C6}mt%|gle(ffg{Qrf(-6Alents9cnR/BFY' );
define( 'SECURE_AUTH_KEY',  'W_gvA1^xz8fFnFmE5=7s*`%x2Gf13hE,l[E_^hIyYlm?:B!fN<11VxOEGMk.k;A(' );
define( 'LOGGED_IN_KEY',    '>&VN_q==f;pt1Nbx]P/~<@fSPOr1|~>,UqRM16$s5jzKRq7G:%nJ5];!i3{Z$pEq' );
define( 'NONCE_KEY',        '|L*q`bTG&3QiNu3ze!DF`8 6KS#G(OFo0aj)GGQiN=H6zo22$uQeAT{8(,%Xu$y;' );
define( 'AUTH_SALT',        '1Xoc!]ENW%Kn+Mj>Vca5sqdle? kmrVs6KnT$4uaB=x@4~5<hwD+`r^yu3,xw Q7' );
define( 'SECURE_AUTH_SALT', ', gve#U-E 9dox-sPHe*`P,3/Xbts4(9G6d|%;<{(peIuHge!#6Q3l?j,TSJTs}4' );
define( 'LOGGED_IN_SALT',   '4ZJ:E4BNNY{pVh( =OVsT]42/;9rZ2(il}#nLBXpo(xP+sw>]|3Brj.qiV.h>%R*' );
define( 'NONCE_SALT',       '#aaQYN aOID/,9Ry*7QbWzXY-l%^NR)gwP;sYI#9XHza~$ya&r{E`#y]6w P;X,$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
