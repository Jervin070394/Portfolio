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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '+Pr j]Rh:xu1TSTh(Yl-y{:S#q2M,O9RE-4q-#!>=Ad@_8ct|0V6d$Ss`X/V^oP4');
define('SECURE_AUTH_KEY',  '#80g_/F3f}[)-q.ib{I)y8bR;&OZyw_-)hb1n!K*7!u(,PrTGa~],W&n&8VSZUa=');
define('LOGGED_IN_KEY',    'HTa(8PH0e^fJWW@r1n?`{Lysc=V1(mD?nbV4_z*d34WPTb7`bG~OsTO|qwh;|jxc');
define('NONCE_KEY',        'V1?yE(2W?p9QaV-JtwqO=t*^`B^-z,b`5rVV60dGu0Tgt4T<YYh+jyy;?;K2MwcP');
define('AUTH_SALT',        '3Nwfz]lou=_hGf&3Yo;ZX#:`#eW.uw3kuRt.-dQIkF?O?hQq3<7WiZb/0^A4AXpB');
define('SECURE_AUTH_SALT', '$sEeDAu&+OC;A6.3b|/4J#(V5QJ)>85Ou1{9yp`4<dcz]yY:v.<bWh%L`Hk02#>c');
define('LOGGED_IN_SALT',   'yR#4aM$r(YdR(2c7+ae1kq`y-4|}E2;4J((:*/C}L9fwFNXU2C^M*~4z4VL$pGMF');
define('NONCE_SALT',       'DO-`&yz[>)rkna7RW:A_Q&A4beO,1)vhyp$m5?XAf;.gt5uQR&Nl-Q0dR#rBhN%]');

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

/**
* DATABASE REPAIR
* define('WP_ALLOW_REPAIR', true);
*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
