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

if ($_SERVER['SERVER_NAME'] == "local.rocksoliddigital.com") {
	define('DB_NAME', 'rocksolid');
	define('WP_HOME', 'http://local.rocksoliddigital.com');
	define('WP_SITEURL', 'http://local.rocksoliddigital.com/');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');

} else if ($_SERVER['SERVER_NAME'] == "www.rocksoliddigital.com"){
	define('DB_NAME', 'rs');
	define('WP_HOME', 'http://www.rocksoliddigital.com');
	define('WP_SITEURL', 'http://www.rocksoliddigital.com/');
	define('DB_USER', 'web_user');
	define('DB_PASSWORD', 'hunt33r');
	define('DB_HOST', 'localhost');

} else if ($_SERVER['SERVER_NAME'] == "staging.rocksoliddigital.com"){
	define('DB_NAME', 'rocksolid');
	define('WP_HOME', 'http://staging.rocksoliddigital.com');
	define('WP_SITEURL', 'http://staging.rocksoliddigital.com/');
	define('DB_USER', 'web_user');
	define('DB_PASSWORD', 'hunt33r');
	define('DB_HOST', 'localhost');
}


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
define('AUTH_KEY',         ';<%F,+evgmw*NN=guf|4v+Y33~eg&MkA@F+E}zu./$6jU>@r~kj5&$*z#)%[b?;l');
define('SECURE_AUTH_KEY',  'JShQn9C/J~aC9jJm0Sc[Sn,RkOJloU >IlTw;PF-a:&{hA7Gb(+6nMg%Sw$A:VQ2');
define('LOGGED_IN_KEY',    'O[|qs3b${k^O.L{X[hc>ecUPa+uJ%=Zc>_DBM7]GaA@*fN+q,M+S-gp1.dCTb,Bi');
define('NONCE_KEY',        'BH?r,{!u^Hb^?V$$7Jj r4g;(>|b*?s^ymL.$E>4jzWKT4hh8yrd9HvCkTy}Q=O1');
define('AUTH_SALT',        'KCUB>`O#&z8Ld@.XT[U=k>g}v.M+5~0c$f/VB2,;4a0Cc7JoW/Igl4nOZZV#1NH,');
define('SECURE_AUTH_SALT', 'la^t?3mwNySY&13R;Gvd/[=~3YN,6+-qKqjtMv9U-T=ejz%}Y|EltE,K)8wwJjC|');
define('LOGGED_IN_SALT',   't__;NWj$eZI(o9zLSmeOS/qGSgs:?Tgk*Y>;;vwB#T~tu0;6Rc*Kv`e7=LyD^:/I');
define('NONCE_SALT',       'O1BsoJyU?:Nk5yhjBxIaoJ@hz#j.;BbE`~;pCX5o|U<@DiWNiVTEN ^ny89|:L.)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rs_';

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
