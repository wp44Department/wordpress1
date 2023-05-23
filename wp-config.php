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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '$e-Zg/W,>MKwF&rQQh9OE[d6V#A;c7dmDW[ssx*o?@5$dp0xpio*5q3iaCi`R>%<' );
define( 'SECURE_AUTH_KEY',  'eilmkSVV&s|gs*K-8m U]HJ`P@I8xdxYlY(3?e(CaPDBUgy!I&g4Gem99MFdTOX#' );
define( 'LOGGED_IN_KEY',    'l(hFwzpO{}h(RwVtNfI20_pkNQ9.@p[0ABZAfX5F5WeZhxM])}l1/%+!ii -U02$' );
define( 'NONCE_KEY',        'KWZ C)k@yNAB& r:y0:c>zq_J!{<C5$(fMR~Yk~zmlS+G8<Yjn66e4u1,4*}u3>J' );
define( 'AUTH_SALT',        'C0E^5e7a^eH5ZB[E_}^{O?-utNJfbi16<aYj6}ld%!YKf$A8@4vKpbx`>K8Ga?#o' );
define( 'SECURE_AUTH_SALT', 'Lf.R:sOnw98Qm_7>;28fkmuqT4*ji vo>}38Y-6Fj-x@YK2yO&,r%Kiz_)d-{t2z' );
define( 'LOGGED_IN_SALT',   'ZSN0,hly8vn+!};ztwB0[4iV=Xm[N@g:m`>-ce[h %LdjOj9Sn|N4OY=eD;2n~qm' );
define( 'NONCE_SALT',       '&C@@r&#[;9=#d[R@{LI!}jb,T<Hv2!,$#YgekB;r6)NC|F9Bt,^J}T/4/XE$30x9' );

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
