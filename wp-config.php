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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'iui(y{W,JdG2*:dK9JKWILW)>nIB@r.a23rVv9&hr,tZqcIr%^DU,Libx}&$(m3I' );
define( 'SECURE_AUTH_KEY',  'v[S[JmPP,-o9:5euk{D-4XKv&t9;sT*0Cgw@Bk@)GO;G?XqrCd3Yc?W{ii64X{Gq' );
define( 'LOGGED_IN_KEY',    'bjFMM*2oVX,8~/ZNJDyk39+]WPMo*O2?9c%qFd(hZp#[@5$>T.%?*Li_!Q3O$-53' );
define( 'NONCE_KEY',        'szXZrxS2^DL_r6.rK|hg[!qK,uE?>9;.0 n;b*+@]4;oPzjG,7wobZ2t`c3+MCd{' );
define( 'AUTH_SALT',        'tO1E|9[E;1Kgx3E<#5uv=VErY0x|xL!`jLeBBpINB:EO?09M.`VioF>q}zX$kXav' );
define( 'SECURE_AUTH_SALT', ':oQXy})<3h`*,zh3Ysm{q)<Xft:Mk=y1XJxfrwa.Auk^N(xTi+_r1TFMWS~jcjl+' );
define( 'LOGGED_IN_SALT',   'aAS ,4VYC)-$ao&D[hWZ&MfJ)[HC%+m&lH_y0KdslX.%aqrXN<pp(1nci%tvmPhL' );
define( 'NONCE_SALT',       'e6K<BoY}w<7SrcB%Ob4(24}0j/zyP2hZ#fL2Iv/5LYKC1jI9Sa:Ysv5Xn6 g5qrq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
