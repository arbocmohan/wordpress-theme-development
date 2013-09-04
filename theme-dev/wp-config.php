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
define('AUTH_KEY',         'CuVUQM{#~;1CbR<N%/2KzQ,&f Ya M,0a&J$7OMBTTSAXRtRFAf^Sp-JM~>=Ka6Y');
define('SECURE_AUTH_KEY',  'Sv$^4.&r-+^<[/LR)xQrFNnHGgyV+Q3(0w%{_:fj.j/S>L]C9whDAf: r.Qq[;9;');
define('LOGGED_IN_KEY',    ':L7S]l*Wd)>TFcLqJu^Y3G{$7;83NmXj)P/qD=oN/4F`EWf><oL_,pa1aaiAAe[m');
define('NONCE_KEY',        'D2aPX)C,EjD[QQSy{=Wm<(s$ ]nOF6td;>.[n{s:~.;[Hg vx}ut| hJ9xF)(h%D');
define('AUTH_SALT',        'X^:1P.Bx<CO;JMx6vfz784yOg[V0b=vegot--O7)8L+[pj.MZy*^ p.tbI~K]Bch');
define('SECURE_AUTH_SALT', '6Kq6hre-EUk77Pj{VLZ56OYz~?OwUf04VA#e^.C]9<ed]Ms;@UcaxM~-f:@,`y~<');
define('LOGGED_IN_SALT',   'R<Uh47L?cu50+HiI(w(VEK#qHDhO8_vPfy|SlcMYI|3}SA:^1b&mrk1@%X)=Y@cU');
define('NONCE_SALT',       'F7${WYg3UXV2p5m*ZhPLyK=mcGXicpPt0/Ojqag|=XyBl=KXir~HRE9JUro,H~[l');

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
