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
define('DB_NAME', 'wordpress_test');

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
define('AUTH_KEY',         'iq|@GD32In8Q}a2e^HI$bzn!y6#*kPgL<ze)(B[7 lvGvp(T6EdBBNukPDwi-PX)');
define('SECURE_AUTH_KEY',  '^Hu1,RR92z1Io,Bq6}jijb>L#-4GmTPQt!rotk]EV=(9EVkoqH/|^ol;jFj#nm2l');
define('LOGGED_IN_KEY',    'u9R0Y7@@0[InHz:KG62-%HwgLBmDAg<Ms8zJz(s_epaMg)CGi2}}MB7YOaD Otk0');
define('NONCE_KEY',        'FL7`nI[_h,F!df?>wK|G8-D]zNQzgy/L|Sv|`a]Z=O{bQODb(T_1;^d3Ke/o^S(&');
define('AUTH_SALT',        'v]>ANeamD7/5I9k5KkF;d^RCbqAh|% JB=P}jbSnNAT]vMtR6KV|E~QqwVbp$Yv`');
define('SECURE_AUTH_SALT', ':F`R)qD0(*e7qF4=$2Z@W^[[:piZ:zfxOa@!JYd^<Q7/06n@LXQ$4iQ9aSh46YZq');
define('LOGGED_IN_SALT',   '?q5|k/@r|S dN/{7{!7|vP,h6(=|MdO`C:LA`4XUKqo|3JTNA3c,-bUyZ=XH{0;d');
define('NONCE_SALT',       '#Jv9t(Me H,,H5:8${k]CZFU%$A^z67>x611[5K3lZag;A#=^kT5t]`dnJR!l{+|');

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
