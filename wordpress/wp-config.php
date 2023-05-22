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
define( 'DB_NAME', 'college' );

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
define( 'AUTH_KEY',         '+, `h7jDN+-OP!nRj?tiY?5O`JECS*AiEVq6%|9;i!E3Y{iA{Wu(FCQS9p3hbOA_' );
define( 'SECURE_AUTH_KEY',  ')*_8+HDR kY!+P;.5#C{Z+vO-L|++HWctRW>!?;*WO-Sz0+F[a-UmoejDxm XkP$' );
define( 'LOGGED_IN_KEY',    'J8[8;>t#ll Tm)mAFQ7mNa)X:$VA(*l/d4awLM#?-`|ohNyS/w3R.=m&uE10{H[C' );
define( 'NONCE_KEY',        'f6^+t=SSrStAYu`@%(;h)JS=aUp3A|e^^qT!}Sla9?RpeDO~j?+E9y(2mt&-ARIE' );
define( 'AUTH_SALT',        'IB zl8X_pw*|Ij4lzL_pC.3*8!&,HU6`:LOeJexpG1+I;#]mA+vmF|Ey?J$,[^-z' );
define( 'SECURE_AUTH_SALT', 'KBZk9~q%+|Zd.SjMDn<7~>R?hG/?A,@o0kZHPL`z%v1(4>i2;Sn*Z@#Ldhl_#fBK' );
define( 'LOGGED_IN_SALT',   'Fp#@@yq1&G4yayb6[w/!x8ho?w{;bp9V?uGwM}9;`l5XK/h+H>v!aHnO$ *j#$eh' );
define( 'NONCE_SALT',       'M;86XRFbVVU{yx`rujdsftwpt8Ri<ZB&Izu0/z/5;[OS5C~Z!@Cis-?=Lm2{NVO!' );

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
