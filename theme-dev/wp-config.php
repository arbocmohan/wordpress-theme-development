<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'themedevdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qfCnB9*jX*Me[4=AB)PKtlW.5y`JDZ1&Wm#[>{wf*4e #zX,(Cc]9Fc9(HO^XCwk');
define('SECURE_AUTH_KEY',  '@b=c=!xCf}>gJ9VKH+o^M;XW9@^c#5r8;Sf*He!5> !]ZQg;N#{@P0xjpJ>K>c_.');
define('LOGGED_IN_KEY',    'rMj8|jnmG^rr!Tic1W9Q(X,U~=LWN_>G:}z@T7Z!8{e0cGPn`2hVba|/h2ACfIF2');
define('NONCE_KEY',        '!XZ5e~,s$(1[4m9N*rV@1L~07N$LE;/YU_VU0n(mjQd=|*5T*SzBqXeZi(-M7@Hz');
define('AUTH_SALT',        'X$S3=$xX{sz*9|+Y=T1xX[1EWi{tRZe0C*%R/`O|xwxFsUzd9@ONbHf]#)z[/hJt');
define('SECURE_AUTH_SALT', 'G]8}aPP|>ey)FT!f*rc-j.|l:F/C=Y[yHEf$aG5E+L~7%,:Wf%ronPP*9v?niTfA');
define('LOGGED_IN_SALT',   '8[.k-(`$;,w(=JVEB+I,A;;ZEUD1$b>T`<h!@_RUD-edAq[;g~Q7;j,N$ f_XuyD');
define('NONCE_SALT',       '!hi8|}{a&OOsq2#a&tekSK ^rVo.ep a*uVeJ)!IxD+:z;C>oBNgaWaaq;(n_hAK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
