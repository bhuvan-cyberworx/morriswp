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
define('DB_NAME', 'morrisstreet');

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
define('AUTH_KEY',         'fjl=*T1|sz[+]mkci[|{{Inc#j!f0S:b}*D*]fCj=gA/<Y/X(*l0{]`<J~Qc*tmm');
define('SECURE_AUTH_KEY',  'QJUx$q%3HXj)Gv4fgT$ `WVJ79:Fqc{ewZZ76gl+W!IEYI]]{vb#Wx>,Bm^w6gE8');
define('LOGGED_IN_KEY',    'eZ >D:doFuq/_j$6sZ~6fEZ3/(xddDG^EE9qLb.1Xx+01Bud%=<7d ~}Z]<5bGEB');
define('NONCE_KEY',        'JYbw+ver5)EcszIS/U<A(auI>f7Q5IG`B0>,Kz_PS`.YLOnj^b#|slxF,(65/Bq!');
define('AUTH_SALT',        'uu_J6j iKLSYI)d|UO,VS(R6,.h|BTK@{gK|!RIm6^YBUfxji(=v1gEBapw20p|+');
define('SECURE_AUTH_SALT', '[pis@+[}QQ$?Z!({u%22+ru8q%wW9>tI<,Y{H?[uZ-MS!DVKuBqS{G,?w/r-5w@O');
define('LOGGED_IN_SALT',   '_W*6#x%rx<3/~9CA~rNwl ]-4wsYlBm88?yBid:yvx)w>Kiv^#@1?!G.TL_6B5UZ');
define('NONCE_SALT',       'kn(=kp_SjFDsHh$m9j)bJU%4i.4r{_^@h420<Z%b0%+;3Y3fOqSG-Kk5j!.!9l*Z');

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
