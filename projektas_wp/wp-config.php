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
define('DB_NAME', 'projekto_wp');

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
define('AUTH_KEY',         '=>!G[Wn={#}4fjJGSZ1@3s5qZUE/,_O)T{T)1sZB&hNag4?IIatjy:]Wx!z* Y:c');
define('SECURE_AUTH_KEY',  'mfDiE,9A(LprC+qt&&x#&ADlHTfs ;gYKI3<8z,grBfgOtSXG919Hy_0t}~#01x1');
define('LOGGED_IN_KEY',    'OK8lQWmIO6h 8Y1D>!$|0Sgp]e6qt=&`DOPI6:Lte:!LDN-e$Xn{S>3tT3VRh&yc');
define('NONCE_KEY',        'd*7fA~T5hb@E/;ke8f4Q& RDj~Ip~T>:9B5)[.Zz;y?o_s/Uzh/Wh`{/X#qUv~1[');
define('AUTH_SALT',        'Ikl_Hf`#]EZVk2~C%;hUVw(i8!%a?<B2Rp[0p:N]IB NLPf(.9h<e+PilQ`=]-Vo');
define('SECURE_AUTH_SALT', '/A[`[GVYc@ZpX!4#9EcZx2x228eMkz2!OJ=s5!CQT:fSEXhjZw4/aHWeQP5p!uF+');
define('LOGGED_IN_SALT',   '-K<1{f,atCZkb(BIMMP=7VBYw.sG5JyUFveXt]SxrWY2gWP[~Au|?<OImLpk@?wH');
define('NONCE_SALT',       'zW6W)$A4K<p5ff&BT/e)?^#,Xa4OkxY0&ol,v3]d[*(1R#J@S_r1pwC%X8/C){4G');

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
