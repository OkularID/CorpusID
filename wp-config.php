<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'corpus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u0mQI#IQ+p$nUWu.tkS!8|Ju~Hbhf~!g%x(c^VD~*7`-?1:,xVk&<-q0glJQ~cg3' );
define( 'SECURE_AUTH_KEY',  'OHANv_)*us}hRp$5dW>9 A#i2VE|=cG+~If$!ka2H{AE~:znxgdVTw-cl_TBi9z:' );
define( 'LOGGED_IN_KEY',    'dfcDnd3C{nDI^?Dp6DdUvSfP_9KEv:]u=V{}ZnLkCJ##s>)+NNc=dnlfB)NMIds^' );
define( 'NONCE_KEY',        'Ov=dl0ZFb!w*::v@-T.HMAn&y)>To2a[#4O3gf=`#cJH-l~iAzEJqS%^nWjDmML%' );
define( 'AUTH_SALT',        'P,~OGt]AO@I&rGLGvgUBw5@;2s`Mf=R)+vmFY{.i?9W.e9%x`i&:_beA!,+,CPM]' );
define( 'SECURE_AUTH_SALT', 'H4]FvX:ZmVWq|1Kcvug)XAt?hDyI)how~nBYo[<G1cZF4A=-*Lh8}[yXjM$F,Xi.' );
define( 'LOGGED_IN_SALT',   'eje=z} MZT#+ihUJe%UVtM=TJixN(NxOOPWS3>R)QQ*^_WmVI:VTL}6C;)Xpd3Y?' );
define( 'NONCE_SALT',       '&GmNi.@H$2l|HHy G1bt+8rdE;cnDK|}_]52aCdosM1>zUNO]1QK5KSgz{(tSexR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'corpus_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
