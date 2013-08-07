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
define('AUTH_KEY',         'iD_Bn;RF3I<+$PiY&@C1y[At3>%=5aq%ur:^)4AQ7 2i&}55OL9Rm4DS: W/T7Y=');
define('SECURE_AUTH_KEY',  '?KKh%Up/2}-nwYV==QStg)R[3Df{+q {#YnH[f+Na}P}Ia6KwWlg<kr&]p]Sr!9K');
define('LOGGED_IN_KEY',    '>$BFibdcWu26nk;LN@6S`2IS7EJz:9SIA!4Qd=^f:#^*&V30#AF96>[k`,et(Ft)');
define('NONCE_KEY',        'brrJaH>l k5vDE6D9PTX%.I1Wx%+PHq/j{+:6RqeY6,/Oba5by5(jFB=X@6hhCqc');
define('AUTH_SALT',        'Buk:.D&ukaj82%aK9tV.t/PM=`SR`%l;-, hv#dluzVs~}&wWB(7zQ^16,J~a4Xg');
define('SECURE_AUTH_SALT', ';-`#/q0{jPe2(>9)Reb*O81*]%A%[P@E8| A`T-i_&}!F9o*f(sJg@+IE~$d]|s@');
define('LOGGED_IN_SALT',   'K:Va##f[ p[;p 5!?Wwl5P5XTe</~$@t**.]6oqa4@b{XE=5 #yms2alxFOx]/>z');
define('NONCE_SALT',       'q>.I8oWfg1sRxB5 YYh7u8U.VRFdoCK#|;?z7AA1@q3*#}Si?V<SpGbPST3MImMZ');

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
