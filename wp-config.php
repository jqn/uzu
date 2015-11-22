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
define('DB_NAME', 'uzu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '82JREO,A-]iCo]I=t#=2SRyBprhU}Vs0]G{14K|gUL]^e7OY0KO2D:#jY.yZ%+97');
define('SECURE_AUTH_KEY',  '=K:QeK3B+Zgc:G3e%-v[MNi.xM(8}dBw=bZPH-Xf^1E;Vkd,j;[Sz//Q <9ABM#0');
define('LOGGED_IN_KEY',    'l/!!{_/amun]b#yg84>u4CyFa0&E|je&dE7Rd_Cfjj dL;-*FQnl&/3?^|/cmN@?');
define('NONCE_KEY',        '5m}g$V8cv`*//TlIslPUc4A&R,$)fNJB~_{]RmB9?nN.oCUuTcRg*/l-+2,!SYO|');
define('AUTH_SALT',        '?rc>pjiV=dA)8juG8IQP}M_ uakHEtHw DJ0v>^d/R4oUDWf7Hp//@+a1!~d#F&>');
define('SECURE_AUTH_SALT', 'en?|E)dF-q$629@rkw,f)zZ(M}PY<r@|Q,SE!kn0^DrjOwS_XQ8R+AM3|k}=SX B');
define('LOGGED_IN_SALT',   '2S:SW}d`ii+B_nmtyW:}:w#%<A=|Q%Q-9Qp20GY&SL^G2[&K(,n2d0B8!#:bM*tO');
define('NONCE_SALT',       'D,lptTap~jZ a[3Y0? |96sf-seNu,0-Q*IrU+9A)Ng3Wt6jpFXW%I]wJDl@}NCd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
