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
define('DB_NAME', 'wp-include');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2pyt+aq{>E~os~,*nfrb,YB> |xyLDI>D$mF [5L0bVGT45D7e;:LLmhXdHk(>_V');
define('SECURE_AUTH_KEY',  'r`uWPwBY[qok/!0Z@(Q8)<xWF?+bBlRMjCe^C%b>ZAQ?q>5;KjR?>[1pT&DiYJ4d');
define('LOGGED_IN_KEY',    '3] @8Vz9s1kYAjouW^Q)C+ZLA*h^Y|umw@)d?m]KWr{-1hz:@}.H]/ |rn[cCgA-');
define('NONCE_KEY',        'E7Z-,/L(fLHO]1<=;K?*&]&[_[>.Gzu=$ )Q3D.6;&C*JEy00!G8<3Cu:&I4gWOX');
define('AUTH_SALT',        ',)fF99w5JIRT[gH8>j2@,.>7F2#MDcxzm<RpdhhGo}<3~j&<^MGG)D[^4wk[FJH=');
define('SECURE_AUTH_SALT', 'i2{X=5rX(S~^nAMs0UdQv[71:c=is&$0Bq|[phBp^u#W[.TbNzaZK=45}/|t2&pr');
define('LOGGED_IN_SALT',   'q]S6qh /4y$eK7N_k58#eKpxRr6&KahD!J/)6B.[8qCGBU&GcrF)p3CD29U172FB');
define('NONCE_SALT',       'EU49U={^v:OzG8jOE#+H!p[+3+xSSH:*jBT}L(e^B?D8(:/j;Bo83-/jZD?LAIkt');

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
