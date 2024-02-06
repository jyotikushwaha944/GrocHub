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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'JXnKM,OS2rArA?gYd?iI8-+S)Y:tEd:%7T3(->d0P5Wd%SeB>Q/QpL.kIXF`@Khr' );
define( 'SECURE_AUTH_KEY',  '|WG-Bn}b!yS(9otbk68sP@+|wVD]7B+/9.QW6}QyI:!PXk{Z[imIq1bX(C@svDuy' );
define( 'LOGGED_IN_KEY',    ':B8a/RnJ*5:O 5{vJWcr1NT=^ty2B9]U9pb[5f{X+!aJWQ[+Hb|!Jku+4`mF}4n~' );
define( 'NONCE_KEY',        '7di%|tY#:Iz7_$:IhV_mi= K*(Mg#C*7OVPTs1{zd`$>[Eis,C>vv#SdU.7lFAK$' );
define( 'AUTH_SALT',        'Plw(_X(`fS(J<-<aKq[r3VlTU%UPl6r[|t(g2DO;=|R09`Hm`Uc zlY:eFf;(a.=' );
define( 'SECURE_AUTH_SALT', 'PkH<-2N77s{A3X M/~*sI[V(Mr^y-zI,[}fR</0^SgT]~SqcEsi5;A(q8(WI3GB$' );
define( 'LOGGED_IN_SALT',   'Iw<dPZgjV(^TH@A`~SWuXrL(vieVbV PL_}W]B VTB9*_G$7Bvi2D`sZjP+{^HJG' );
define( 'NONCE_SALT',       '##Vg7JYGU{),#I?t{|(%cFonwUnGjwi5F?5K|N|^FK!Fxe+o_cD0KB&m1Gh?{uw7' );

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
