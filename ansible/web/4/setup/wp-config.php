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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_remote' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '192.168.56.11' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'V|e&WRbX%k ]@r4eV?D[;W;kbtZ*^XxLa{T.&!y7&O*qUUhR^$[0@YAON*H]9D2|');
define('SECURE_AUTH_KEY',  '~_*105}62+:o>P#&)]j^L:W-O,-u.Oa|B;oxQO@=|UH~nJ8=L|#t^2dVSe-Tbd<7');
define('LOGGED_IN_KEY',    '$XH`Q:As~gu;SkEqc,6j6yg<[![T7oSW_#ze^zzGFzIrW)Bq6:f_P+l8|#606@yu');
define('NONCE_KEY',        '8SmQFLc>t6_Zp.EWZZ&%&bQ|gYoW-.izHxSqmGQ?T@0Wdq+:AU>u$?>*AO 4^NbG');
define('AUTH_SALT',        'hU/y#[YO zkFh|h!QX&jMzgt{efa2|MMKE*wH|T+=U=<iohpL6#V(h$0-6H}=uOO');
define('SECURE_AUTH_SALT', 'R/y)MWVrthfu|&69JImFZ3g;/f6!xP~RBQNzC7B5>]FrCJ_jBY:|[{skR+,f1Oij');
define('LOGGED_IN_SALT',   'Z:1+F~aQW_.Kke${:?#VIEJ$l$1E;%s!l[QlC|BY*;$_1|;^NJE404rzbQ:Pknd3');
define('NONCE_SALT',       'HQ.g)@2LI+}bzg6qwK+WX*b*`:2Xd-9-!9@;|^QHyZqD?INOg{_sESpu!g-D~m}T');

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
