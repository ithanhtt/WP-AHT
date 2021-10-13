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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T7HK!1pX^,d95-m}/hA5NFU+24HR6VDbYnjN>=?}y{z=E~X:cc5]R85n,DW05q{e' );
define( 'SECURE_AUTH_KEY',  'kX4ak$K4kW`I4]^he/3e4TZ@VWG#FLE?kF.WvW]*1c{RcMVHbtQ1C?76ws:>CL(g' );
define( 'LOGGED_IN_KEY',    '8ummE`GR;q9MTz5g8#usHQv*3h^q38@p8lq jRaXbhDLZT`47T8I7.eVC#dY!pTT' );
define( 'NONCE_KEY',        '7C]EPsaDpgwty(uYK(:V0E[%}$C{h3`!JYW@^@>?}srA[<6H%gZw&Txz0,J_]5rf' );
define( 'AUTH_SALT',        'bSjCkg^s0jR4/Z]D H-9N}-Dj#uVk*f)vE~S14*m 1vzKuyMNk_2:X%k<d~]a$3y' );
define( 'SECURE_AUTH_SALT', 'e_(X6Y2WHy_%Yk>W}_/g,XyL6koST5M6[cZijlQ2>M`Y^](f_~s}bM[2@R9!@*ip' );
define( 'LOGGED_IN_SALT',   'w5gWMg`U[_7upR(T>meBRQsjeUhDZgH~uWYd;1vTH6yTm<@ wJN!0/e?`8Ex2v7a' );
define( 'NONCE_SALT',       'R4C?9Gi%.0qSo_:l,y,=aI9/F*KlzE6SyVsi9?13)&&SVi8sr15:?#,[=OCqUq>k' );

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
