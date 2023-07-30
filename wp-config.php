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
define( 'DB_NAME', 'computechpakistan' );

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
define( 'AUTH_KEY',         '9p(oI)89MP}KDhMh{-`%z6jMr5uF&&.RF&cK&IO{VY]Qkp!b894fav_H7N?S8Uz7' );
define( 'SECURE_AUTH_KEY',  '>04nm,>A-hg{Mzl|lzw$CnF@3u)`EQ1%SfW#F%.,WMZ?3q=};H^wh1H*[;W8VDHW' );
define( 'LOGGED_IN_KEY',    '6xTR=+OVWvP!7rdR+=hR#-kY}{.k6uqp>&A#D,)>a)6!PirF`)5_0PP@a(r-aX47' );
define( 'NONCE_KEY',        '](8])_(c3t!S;Fih!8K90FGejg4E;%h>a^@3B=ep:4$V2nIU_~ulYu{g1z@w{GSl' );
define( 'AUTH_SALT',        '0f|00MR/&/7>rTkZZAUqt96=$j)XR~;{)7+F3<?1nyqb~z&h5~m1aS2L aQY>Xb8' );
define( 'SECURE_AUTH_SALT', '` S[0~q5l@^G4.0mYYGqxPc=,hf|Y32xmLF%9x%cLqJ6dw7; 5E1rMx5Eejz,tw(' );
define( 'LOGGED_IN_SALT',   'X>#S/<mul}?_fZ!7J8`+q~eQO?]Ggm~Nf-^=mf}J0=!.cn^BR5Zu:*K|FRLiK7aV' );
define( 'NONCE_SALT',       'BkS~TKu^q$CZ#syw`:1.4W:1RtV}As?9|jIvbcJePK/0L ZLyVy)YQ<AmN7 !w`1' );

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
