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
define( 'DB_NAME', 'test77' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'iHC]~F~y^_+gx.0~+Cj}&yAau04=xG+[[ci~C[Q4]7 ln45ga*2ODNVlmo0wQEos' );
define( 'SECURE_AUTH_KEY',  '9wB%un2IqosX3g<W/~BwrxKcx>NShIuuP#v%0=ky^uW_!n0A/g9hNutKbjd@OU8g' );
define( 'LOGGED_IN_KEY',    'oNLNH/agBA2#B>GxlI{UT^f+hn)N+Tu55LyJ[!n9_<^L;u{eyPboxR]L%A#e=j_!' );
define( 'NONCE_KEY',        '=q%dtA%/`)joYa5%h:zPlU8=ut*jf9.rQ~CfVN^`FF.X_&X2t?uln|BMYFBrun-7' );
define( 'AUTH_SALT',        ':,E3:)q$?[q(lA:Yl)(yk^QB@?T,dLps-ms>)l]Uw@l&b#PGk.>.,9TYWY_& =FO' );
define( 'SECURE_AUTH_SALT', ',=GI?v=c<TtK/0)n~H13v$](m&+QU {:tdE&5U|z<4bFT1{fPhf%y@Yk2IzUN<RP' );
define( 'LOGGED_IN_SALT',   'QVG@I*RYz>Xe~n|I`zv86F~WA9dYE=G9U0mJZ,(Z-WAHWXH9.hgYge=|f%eGwyDM' );
define( 'NONCE_SALT',       '?.9n=&6/?v]i?n?~v*@-8|p26/V+.& hW&d%bTY(]IAV/7jIE&ZX4VtN`_ih2Od_' );

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
