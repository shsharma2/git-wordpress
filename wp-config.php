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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shivi-blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'AG=y`u]o41u|r6_s~>z+3d`F?YE#=d=vw<pOs`M{1+w3J=hPD:*Gz<qdIW/&.KfA' );
define( 'SECURE_AUTH_KEY',  'd%3g@Z~rG:.n 9=z{p|y`~ep4jc Z^2>gxxT6W@$H}}~{-y~=kX9Xb/2.Ns7a1<m' );
define( 'LOGGED_IN_KEY',    '0l7yR5})SK{|*K_PiurTg [6S!%{e/emr6~F|%YHW~nK=<mZw<s;)p>?SB*.Oa7l' );
define( 'NONCE_KEY',        'k9!JaV8~@?+b@t0[1$gwJ}K=T]1S5Jm?@2YVj>MD*)/G}M#1K,W5dZZsC]7x]U,f' );
define( 'AUTH_SALT',        '$<c.UVN6AD-ZL9nXI4y8H23[T5mH0;EU$2nv13=<gEI__#SPyt&Ub>z^I,n67zNM' );
define( 'SECURE_AUTH_SALT', 'R>rO64Ol/9DLC<w>B*dh/6UC/}xo4R.%(B(Il7q[i>3=~!*LDzwy[$r72MRYCV=(' );
define( 'LOGGED_IN_SALT',   '[oFG27bqC{&-I3pk%:%K0~[rjXP8^AmP!4*z_Vk!KrZr5VHI6vJj7ReVs=-WDc/`' );
define( 'NONCE_SALT',       's;u~j~P!BqSj]sGk u8Q.Dx#K2`ypBsX)m]sk!R&o_K(4^L&u0pVK]#sj `PZ-7!' );

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
