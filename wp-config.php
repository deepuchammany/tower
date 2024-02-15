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
define( 'DB_NAME', 'tower' );

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
define( 'AUTH_KEY',         'rJv+gu*<trbF cI4C|n:QF=d!JAO@,Euk8fL*Bz~Yg)8|m?$EwU4yl}DxA(%VB?6' );
define( 'SECURE_AUTH_KEY',  '?cA;i$*aTS,W(L603_gC),VNUQ@b+5<(8(JM8-XB9Hg6#aJ5jUdO)C.[OW?qX3L0' );
define( 'LOGGED_IN_KEY',    'V%8lIL`Gu<Ai~@kxy+*a!4}@.?[@c0BOP}.B4sSLPcsYf8B2{YBMEv2%;^jmrAS(' );
define( 'NONCE_KEY',        'B-B=%dj:;DYI}H|,]:tM(;Wx0=R;:LHM!eG7?6^*2B^Q@S7ym[XrIZ4Y>2ihQ2/L' );
define( 'AUTH_SALT',        'u+hSZ^7xBk1|a*2UJk60Qa@:qFb`{{+M2Xd;A_^nS7d&mwL^-3ZWRBo4I%s#0>vC' );
define( 'SECURE_AUTH_SALT', 'G!Wy7i..uv:D%Keh mo?s_X:WUpE7IGY.fMy6DDU*f8Bwh}sB2~ePCDq{jE.wRi@' );
define( 'LOGGED_IN_SALT',   '>@roTGewmqo]Qnmj?&=JRz+=Y@=QX];FNg.M+0PHBkVT4xzW4^S]]9:0:@P6Tmto' );
define( 'NONCE_SALT',       'NjJ3G#qhck`xms(>BO:$viTRAu2+Qbx|%-D_1vsw!7ZL4h*BV5x:9}1<MQ;s#eio' );

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
