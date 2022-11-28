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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testalejandrowp' );

/** Database username */
define( 'DB_USER', 'utestalejandrowp' );

/** Database password */
define( 'DB_PASSWORD', 'vHtestaleajndrom9' );

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
define( 'AUTH_KEY',         '$0F|%zz>Uwj$KvB(K3a41DX{!N/|b8_KK`df3w.v}sJeRtx&4G&~Xl5~Q#@-8@ow' );
define( 'SECURE_AUTH_KEY',  'D}tD|<)f<[|k2Dz[,,}Tb<H`w?K})Hfc|V78/fYAmtpC-TrIPQIo+]c=z3=v#$(J' );
define( 'LOGGED_IN_KEY',    '~3/Y=.3twZDd-1^7O6Hkmsr0I*.]_SM|UmS*~/dSssc!Rns*UVfK}N.`0``(.$~z' );
define( 'NONCE_KEY',        'N`Q41V#<+zdGaL/EA1jBieb`svsz{ILQJH*,w+wz=9%w?y=|#<3W=EI-[n:ZpfU,' );
define( 'AUTH_SALT',        'gC7}c{OckleV3{A%T6@SM(F?}@c5jAq=Rv[u<DJr)4oLoRp.icDRm^GM&GcAE~%S' );
define( 'SECURE_AUTH_SALT', '<W^F4:g}Hn/KhI..urym}Ul75yc>Pf7lsx3l.q=dDl8K9C3]`Pek|sxLXI89 )S&' );
define( 'LOGGED_IN_SALT',   'bA|L~-1w&:hLDI/=.lIq-peCEu 2`_Q[;ZuQlc{k.1DVAgBB%*P|Sf=~48`Wm9-R' );
define( 'NONCE_SALT',       ',yT`)XtG`.je=Tpi}6&~vV_Uase`f4mb_r0PpiJKP?cb%Xzw)}%VKminD;C!vcIN' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
