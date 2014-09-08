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
define('AUTH_KEY',         'jWD-Y[dNd~GiXaATP0,x2Da<gcK4jof[E_ADWouu-YFf33;N?UD41>o:RH6_}ov~');
define('SECURE_AUTH_KEY',  '!,REE2FX.|;l*IhrfPM+*UkdVeqR{.>ed|Ff+pB2w0.]eUa9H@n$h2:VZ%e~[K>^');
define('LOGGED_IN_KEY',    'g2v6>/VpwBOST;RF$SKax-k;7_-WYj_-mP!uEMt-Ko[T+bB$>*F)*QU/+AaH@ Rv');
define('NONCE_KEY',        'HhO1aCjKl$-Kr/zcJ-Gv<d?|X.7!!n4?VrH^$=G4u*FRojhvNUuN-s|<EVWEL-F3');
define('AUTH_SALT',        'EoFc d%:TM+/!*7G:nI%NDr{OSGv#()g^$6L&wtx7{s4(W}8;L(#wlOO*XKC|CCk');
define('SECURE_AUTH_SALT', 'Sq!-++f`501)aO+NvVjA>>.%*raM|pR;QVyNd_VS>kK6%pMaz~|9=mWse!}|fG[i');
define('LOGGED_IN_SALT',   'Yx0eoIfX{D.b^QCJ02uKm {d|HVOuoAao$#,13;`!JcB_J[f;){ePZnyr(VyLUE.');
define('NONCE_SALT',       '|&t]Y@$_](Lo*8#!!bZk{l*NfTXr-cjy#L:3BB-_ELZ6G6k-++l52^7jb@b$8TMO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
