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
define( 'DB_NAME', 'arrafi' );

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
define( 'AUTH_KEY',         'Y`>5:Y1KA4he5]bPZp}xNDFIjE`(QUvoGlaO^Xnv`)n?mCbpw(JJPV_,y{RVV&=@' );
define( 'SECURE_AUTH_KEY',  'I-l6RrJ=6|da[lW:#(HIUOwU8M^%%3rE}g,~s]P`Ta=p.Jk?x.$du(w !Fm*pt;u' );
define( 'LOGGED_IN_KEY',    'Zl[+)=9UvNEA}S$sOB/aK75%QR-z62KQ ~5eW>6{Ii(9i>wyfGGi$F}})PS!VMG2' );
define( 'NONCE_KEY',        'o#dcg,C244jlqC7]wd5)`9|zTw@WR`<Us3/8WB~ dn=,UVX;k#- )kMgQjEj,@sN' );
define( 'AUTH_SALT',        'K!T{VeWOj_wk6uyct.XY]DRdV&^e|lRkta1_r<Jx=D-x2egqr0ah!g+D+6_-f@>8' );
define( 'SECURE_AUTH_SALT', '!fzrFy[1V;aoKEmmsL96^8$%-rgPj704[:L2(p38%e-1yCy&8cNH^d^MiwWxZ(|/' );
define( 'LOGGED_IN_SALT',   'EcU^G~QqF1p2){RbP{oju+f`&HibS8lQ~sI-^>?-$ *6H+JE!P3#wZv95utB(f(Z' );
define( 'NONCE_SALT',       'Y1%GHC5&&B /g&RsZ+m)qq`_zRO]r?o`q*Tg9I%cUI2DxL?t_DKDgM|4IfR%;)KI' );

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
