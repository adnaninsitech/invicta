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
define( 'DB_NAME', 'creapkxk_invic' );

/** Database username */
define( 'DB_USER', 'creapkxk_invic' );

/** Database password */
define( 'DB_PASSWORD', 'Zlbbm[OdrAD+' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '0rZA=q-. hLQdY%aJ^h4J,HX?!#t[(yd+02 3%2Hfb 0Mu?V5S@CnVh2Zz1C+%V@' );
define( 'SECURE_AUTH_KEY',  'XsCQ7KihdX5,,v!_J^Hp]?u@.luz?gl, B_0= Q:}Hdcz< syWt&+_L{{Qiet6 ~' );
define( 'LOGGED_IN_KEY',    '/n_[o/ot+Zkb#23`WvJ|3icO)ur+L3;Uo1JV+w,q;>>i,Aw96t.Fn~8btF>Rc{vB' );
define( 'NONCE_KEY',        '=M{nluB2=;+>!@_)i40bWxwM(dvZ^*I]v8rSp^)ay73UW7&d%%R6xn5rD{SMHr0;' );
define( 'AUTH_SALT',        'T$-U@`R;A!TOdxH$(S3Pc5]T#nQ3QY7*A_BhV*;47`W#)DePD?^[DgYRWwe!Q^VI' );
define( 'SECURE_AUTH_SALT', 'b#jG:e=Di+P$caUvFB<Ram[QhF7AHSaW_Q/fw}]^<1SiDI~*K[:a7qI GQX|OsGd' );
define( 'LOGGED_IN_SALT',   'W:A7T7bVC+_$X~sR.TX`Wp4iiL(nkILh<s9R-q 1j**v0LJ{Z}b/GKX:+qFhf^kV' );
define( 'NONCE_SALT',       '7CnhY.]p(j{#[gB&W5Z7<M<miSNj0ks*D1<mwYA67AiegXV?.b]|5%5I|mT8RDjq' );

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
