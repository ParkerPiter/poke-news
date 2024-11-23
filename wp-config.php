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
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         'g:pcGEkwebes`kqT0XaRFgBv5_4r9UQT1S9[evvS^21r]Ur6V[gZGE?ieqPYkufs' );
define( 'SECURE_AUTH_KEY',  'R@C6TtQ]@9aZO`gA=@H-+!B@Tu^^)A=lu pL7L5A3..NtE*.I:R6Z,V6Mv%c3KfE' );
define( 'LOGGED_IN_KEY',    '? C*BdLxfM1v@X?sKFXr{?eD3XvWUT!LR=oW7le4m|)-8hFm$5S:mQxf/)+(xkGs' );
define( 'NONCE_KEY',        'HdEH`og}SWa;92m!0xPs:mq1!jL Ews^^ C+#)m$#uIcpzS.9&IilUdZTrN8_0^q' );
define( 'AUTH_SALT',        'z<`>-]_HhQ5eH]eq5AK+1K|wKy|!@W}./M,gP7=ap O(siidQ5A=Cf7f$/P.Z{$.' );
define( 'SECURE_AUTH_SALT', '9S`*aUzz1YWpz$eK+@TqvCV~.>apXOaM(g_rDUgRd>W_Or(ZQ#HnRT|RK>).r(~[' );
define( 'LOGGED_IN_SALT',   '5mC8jZk56o#x+-Bg{7exGrgeL;/gIrvJZ)!8Z5kHwFsB;N&,-6;E/pGi5J;kYx.0' );
define( 'NONCE_SALT',       '^*63 8553O|(*t7xw`HktG(bO4yjnx)n~xaWx<ju$JPNF&bsdj9O0qlT]jP;|0H;' );

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

/** Enables page caching for Cache Enabler. */
if ( ! defined( 'WP_CACHE' ) ) {
	define( 'WP_CACHE', true );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
