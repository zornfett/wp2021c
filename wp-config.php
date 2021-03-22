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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db2021c' );

/** MySQL database username */
define( 'DB_USER', 'zornfett' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ch4mbersGr4inger' );

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
define( 'AUTH_KEY',         'xro,/{f[C(_i_~fs0%mHiFXp7Q5G=t,c1S94$&d3I7=6oxQ13i#N`aWDMuEt[@ L' );
define( 'SECURE_AUTH_KEY',  'YW2vW;(P}`ia08o_41MJa;(aTTORCXAuq.i6;-1Y2Oe?n^3rgNw>)zF8C-Zg#-gU' );
define( 'LOGGED_IN_KEY',    '{E&V;_Jp1^Em!oU{9D[.38BC71cann./{L`~;n2|u>7,Ja^u?k4O=F=J,,vWk[tu' );
define( 'NONCE_KEY',        'UBAY}|f_Z|g+D]j^acDZO1-jEB@_3=xk_B@LV5@y<e9jk=;2.K)QW21})Z5~M$w)' );
define( 'AUTH_SALT',        '*htL.A|y`l%C;y%X75xw--%B*D^0),c-%R2q%ZkMg@I!)Kcs45^_XrfO=T1OD/t*' );
define( 'SECURE_AUTH_SALT', 'sw4J vA#yrI1LVt(h1#{%YjXFk47Yw4]bYiaP],1L0N={hvx5s3DJm4$oK&56pX(' );
define( 'LOGGED_IN_SALT',   'mSqNT@B_fEaLcvB3vCS`aMs^y71Db[:#V|f0OjLZ0>d935BN[kC?!0Mu%!magB*}' );
define( 'NONCE_SALT',       '-=,]l(=V{SbK7X{)k6D-9q/!6BbIK;*p71V<p`H+4%$0kEH W:W&$2yF8EL`X3`C' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
