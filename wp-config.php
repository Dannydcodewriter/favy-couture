<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'favycouture' );

/** Database username */
define( 'DB_USER', 'favycouture123' );

/** Database password */
define( 'DB_PASSWORD', 'w/63m2PTy_aO_w6r' );

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
define( 'AUTH_KEY',         '`yZz/7~=wtx;5 QRXA{#uzlLE &LM=M1}5kk^PHki#P;Y0b@e[WrN?CGbzS1!^_p' );
define( 'SECURE_AUTH_KEY',  'p`#bE<{[/_Xvd^t9a{LlE`nsC/(:[G0<)ckh-13c#f_&w+wtw-d0:HdS4lhjRlxE' );
define( 'LOGGED_IN_KEY',    ']<^P; :j+h@$=204DT7LxUD%Y9G~se>q^ IVI|lkFPaA@IRL~v<d0C8`CaE^OrY!' );
define( 'NONCE_KEY',        '/qHt3Pkzpv_T!&kEy<{PwGvZ]!S *UaZrPhtBPYf2(A(/nb&,S(tnEuM^{B{STs|' );
define( 'AUTH_SALT',        'rV@0=BEE3e(ydnuw0!I*R!hl- E.?V)o>hXJ3r;2sc=Hj-%1Xy>?wkibl(2uTg_n' );
define( 'SECURE_AUTH_SALT', 'LJxlp|*du9omwi^#g`%{c^L/V+1h>^jrA~=Ihyr`Jw8`$B;6]%}I5P[y1_Pg&V^S' );
define( 'LOGGED_IN_SALT',   '}-p=v/,FSy%9Tda$OL,$JK%6@ols=</|AFr2ev%*KI0-P_c|Oopn8UbckeGM!^$$' );
define( 'NONCE_SALT',       '<gYg>yum;p:a8VK-zreX&4,WJUFj``?Y?W(gT}kO$=N;1~:||LwS_)]?wU%(Scn5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fvy_';

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
