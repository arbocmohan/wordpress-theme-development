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
define('AUTH_KEY',         '2B]Squ(/T);`c47(0>LJht$xxKT{~|NSgAEz+ERcq+EG{.D}z 6i3jKoK*23* =C');
define('SECURE_AUTH_KEY',  '|wzFWmz?Dch-QVLm:ri{s,%<y2:]vBGw`~*/:`E>r|nb$]e#E,EASP(JL>A?.kc(');
define('LOGGED_IN_KEY',    'mt3dbY?,H;e(`(J3d~rxZu)b0kt[3JA~Vh$^9,FyXt?d]36lHeAcU;*)=1I;~tY<');
define('NONCE_KEY',        '<kzP_y{I|*y%iO;7U8C27Zdw]xRbxLK~NA~(r;_yP5yU|&G,}F<o>h7CF}~FsZ$|');
define('AUTH_SALT',        'zGyfAA]*z&*3(/w}kh9+]=rxL&_>|uhO{tMb)h_/WQQH[l6S^v4g?Jfvn<H#|@kf');
define('SECURE_AUTH_SALT', '_W7uJM:#bFfe7$8TWLkN`3my8CrDOEb+lAHse1O#I5hF5E(Tk$fU$lTCZPS|TxN^');
define('LOGGED_IN_SALT',   'v@4bJcJ!Z;dz#k3]0X$@SAi/!.g&j/+#CowOfA5Xut&#j(Qa( ?>Qj(k||1ZD_/a');
define('NONCE_SALT',       'i~?H$/me<ge^RLQKeUe,DI+<lZkFs*C],8b]@I9>,b`&8|6)9l0gxKw}qc-$s)uu');

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
