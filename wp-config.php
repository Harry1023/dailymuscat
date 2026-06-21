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
define( 'DB_NAME', 'dailymuscat_wp' );

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
define( 'AUTH_KEY',         'eD=S-+j,_q2!/H^p4rbgcL86.ma7{$d:Qs7%,j?E~~eF78##Y1{Hf#*W&v=M5`hf' );
define( 'SECURE_AUTH_KEY',  'vY*=P6#=8bT$Tt>_1Zb8t$_e/ #5AAS^Y$4PC4K^I:|7XWq1bM=i<::j!~X.W@@T' );
define( 'LOGGED_IN_KEY',    '08*|[C,wY4$V-hvRgI5~O4PtRxjN)>(@MA,rLfcujasc5BD:(~3Pr1yBd.<o:311' );
define( 'NONCE_KEY',        'uA(o=ahE UmDk<y&$mN`^-Y[]Vbb_QVsxeBYWkRXyRlPx{lyhUyq=eey@y,v/_`A' );
define( 'AUTH_SALT',        'Z}`+_JfFDKZ?N8bt[K/g?v**voQE#s_QDz>{G~:+FR95@-5rA/j-v~Aeg;>MxY#j' );
define( 'SECURE_AUTH_SALT', '=aKjma9.eholSOcGl_9bnGJ7v+;}c@ooHcVf8Zo[u81y!?`]~V?AO6ul=]tbdU_#' );
define( 'LOGGED_IN_SALT',   'e|X]T}s=OrnQ[?11vu>)5,!m]-G1C;n*E,4-{+ tMqx_poVU$yV^o*&|U83plH;W' );
define( 'NONCE_SALT',       '[>)pX+SuPK+o$?@2sc|t;:7:|8Fz{P9o&,4&luK#__MmVpZ?Wz8D>~5m0b5|]+df' );

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
