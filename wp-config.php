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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         '[w:l+&l?[^8@e,Y0j_-1)@My{a.tlDdY^PNw:ZB_joS)UT0-q1mAJq6@F|x]h_$.' );
define( 'SECURE_AUTH_KEY',  ')cC~i),E<V1LMmr`kF)?~mw,qg[bP;<eECv?/]VhYN,6{464FKGHLI!@^ao:[o8H' );
define( 'LOGGED_IN_KEY',    '5eX.xuYKl=])QMxv3RQ(Zu&gg~CZ3W1+X[O=@2r*FNNR}6U/._|a-m?-pc{{u6@h' );
define( 'NONCE_KEY',        '@/384DljZ9a#KWE1puY#2dMax Zx9)(//Dbr!P)!!LYdp8 u-_~gDKof_,(z6uCd' );
define( 'AUTH_SALT',        'N?WaxUQ&o+8AoX9s>99xnmI{(9t)*!n5#F<rf4,rbdN#Q+E1F17DCajjq//YXI}*' );
define( 'SECURE_AUTH_SALT', '>9C#d3l.|gwUV:>}ZHRM$9,Ec<N{2c{~)J}>(Wh-:]w7vHU`? [9Bp$7*8 c#H)K' );
define( 'LOGGED_IN_SALT',   'y|c U_468v)%C5}de9ht3%|BIw8C|z1/)trZitG=/ 7~yhDm@m3:u}vUG+y>,NT!' );
define( 'NONCE_SALT',       'L>4o;SpQ.HQQDq_tw`,?JBPqxDU51hP75!=xd$h=]yH<K*ofhBagu&[%hW,&P_&0' );

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
