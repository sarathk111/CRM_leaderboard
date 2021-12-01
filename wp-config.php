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
define( 'DB_NAME', 'leaderboard' );

/** MySQL database username */
define( 'DB_USER', 'sarath' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password123' );

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
define( 'AUTH_KEY',         'kg2oo^k6VHv,f^Xpyg_]C$Qbz}KuMuIwD=ku#LQ:lHfrJypG*Fn$VQ:vH_pzNULD' );
define( 'SECURE_AUTH_KEY',  'NqK&M{5<;Fd)T=Rmo.-A7>,KRAmd)Q]PZii@mG9/pOz9>4F$vJGp36~*hq4msGL_' );
define( 'LOGGED_IN_KEY',    'erx:4u-|p&lB*8ddoM$Ov_&1{~0+*8Op=3 `|2Lf.VIoH5+2fhM3#M#t>0EWr%BF' );
define( 'NONCE_KEY',        'fKVFDS(e56hQ%a?B+ JSDNs7lY?#!Z!t{FN?$yJ`AoZQcdqi^R&!:q%~D%H5aaU^' );
define( 'AUTH_SALT',        '`v(~rZnaL%3V@}L`vg<80FYXq<XXNCk;7!:;H-ll_6VMG0i^  uyn]eh&Ob1V;oZ' );
define( 'SECURE_AUTH_SALT', '!m5E%Ol}3xD4HWwg;@qL={-b7Nw:0/^`q2!&(?1CfVl@$X99J(c5^ZQX?Fiz).x@' );
define( 'LOGGED_IN_SALT',   'm$=fTtT052]RO]:Wk5J#ds%hE|{LMI<`Sz}FL|,UU+oc<|,qRZ3V^Z9aeCm_ng&7' );
define( 'NONCE_SALT',       '2U!Mc?S^uXMtDh;)WJ_EJ0&Z*dkyaF$I`snc+xy!aXH_U&~7o9fBNTFGupIv*H:_' );

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
