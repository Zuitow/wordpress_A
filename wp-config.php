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
define( 'DB_NAME', 'wp_zuitola' );

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
define( 'AUTH_KEY',         '`7+>?VE<7;rz1BN+ !8usROJvp.>5OlMd8 C [SzL#2=&`cM7GbeGX^y7hd2qe4W' );
define( 'SECURE_AUTH_KEY',  'S2n0wSLL9=[N!u-(6=~4QUyu]9BD@LP7+@EgODkr}LkLIKzd#heeC)$l1p2dkM<Q' );
define( 'LOGGED_IN_KEY',    '[6cRv{MRWFAUbw3Tk1mhEC^gpkj,0{c<+:0;+T,e*Aop@m$h*e=9u3PDW#%=]<NQ' );
define( 'NONCE_KEY',        '!s`_0@H` >/K0>pp}4mGy6uLTo{nCL|6v6Ab[|F?#TzAI=$Jjz3%UTw?RRfhIi(T' );
define( 'AUTH_SALT',        'F]>~naRb8[`5lwn3?42KY)%d%4$048G/t:Ahnp5~tixSY69}:tmq5OQFmT8rjlmo' );
define( 'SECURE_AUTH_SALT', '9]h!K]/UI)5ww|Q^tyC6oD6xSc~98xlx;L<jK&#Q.`K?2[>~.Qemq9:Ep(Jf#zWJ' );
define( 'LOGGED_IN_SALT',   'ohY)3KsN>9H8HXH_wX4D3jcGwAt@7 _HIX _?3:OZySb0$TqF6fiaDm&F?%xR{Hk' );
define( 'NONCE_SALT',       '!+!}5Bo3Tpf6)/|@.6T>Q@mhRO|(ku*ndy)N=R&R|:Le /0Naah)z&(wAw|`;;iG' );

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
