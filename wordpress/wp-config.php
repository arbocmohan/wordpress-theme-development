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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '<OUvN@*vhe-f5pEp>5xg^B47,<{,Qep?iUhiqVl8L_!uyA@:.#$qK/ir8b84Rkkb');
define('SECURE_AUTH_KEY',  'qKlQLhwyJX+%;rH_sh]ZlJ)4_k|/[rNK?ER -Nh i`(vk|Mz]aK?$@R-ax~`DMUc');
define('LOGGED_IN_KEY',    'BK1`z(33dljeyKZZP&*>.l1{KQ<)i^?`8oEW}V5q~%SIH=d8z{S3JHeb4RFTQ^34');
define('NONCE_KEY',        'ymL#mNEzz5@R B<4v7<24:mC^lTza]_G]lUr5Aq&sSnv{F{f>)wn<E0~5&,ijG,|');
define('AUTH_SALT',        'cE7>c@]a7=YGZTC4#Tbrd!wq(XeMuhnU6tUvM?jwOaVe9.ppz5}MR,oK&Q`n)CwB');
define('SECURE_AUTH_SALT', 'W^6):Pzq8%`*.>?jC2G]S08D@xHdLC +plZ$(o0WNV@i=^Z/q1.BCp7SiKpG+Q l');
define('LOGGED_IN_SALT',   'l*U@C)%RyDXxsR/gsGn&9^GJVzJAJ4K(DQG ;fcRbR+~h:td>l(A7B$6gkCnzxHI');
define('NONCE_SALT',       'q$[3*Q:|WtcgDGl`/q<>S;ccmy<&&eX~6@EL&P^:qHu^V)J7x]*K 9gHS<VvkgLK');

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
