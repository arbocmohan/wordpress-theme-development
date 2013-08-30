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
define('AUTH_KEY',         '<$h~n2Uky<&jBHDOw!/,ooT0o%35ujA|N*frK>LsYmLHiMKHk2p_kS&b%}%Fs`c4');
define('SECURE_AUTH_KEY',  '[kDwD5nGaes)A3?`@Hz93mm4SBOiY@mLwGwr1yu?z1ToTCE2ONY`RTv?(M*Nz/4G');
define('LOGGED_IN_KEY',    ',C5RvhiEj3/5~gn>PW-<T/@D DF.uj);YyetFVI5QmxO7vW*WS[aS Sz?}Q!B#{{');
define('NONCE_KEY',        'd{pefV](~FCq7H_t7PaZQ4j21}d&2]oZa]ch/HgN=F~xBMu 1>C%NyswEoD<vII#');
define('AUTH_SALT',        ',KFT(6b^Z5;hS}T=nL*knbw=IThUV2)S:s=yVK}GRR{8[*~,mkpZ-?uAn]LXeru3');
define('SECURE_AUTH_SALT', 'msEMJ*`@0A=L3qRcwn1!Sqf0l#:j%6as_`25hnOm<(Fc1xIj O03^&F^QKh,v6C(');
define('LOGGED_IN_SALT',   '&AeF*R9Q0a:Zj`oP1 ,=?83/k@HN})=e[/q6_)>$F*GfA?dv/[`J%d!=JX--(!Id');
define('NONCE_SALT',       '-o`z|L/VhG@XkKV~5.WawLgi|uEYyzFr.E][=%&=bzBgER$}I?)[zklUgUre05Vc');

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
