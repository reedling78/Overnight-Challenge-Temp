<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Overnight-Challenge-Temp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'z_OP-)m.I)C#k|iAz2)v3_e!nNM+8o#rSElKZOn(C+OZdOR^ZovOj+3qyQn;e]+Y');
define('SECURE_AUTH_KEY',  'A7$_j5>1b7*lTBv,LCgE|;$g+KkzdCp&:Ms-1(T}|#f{e$4Q#:8bnM[s9Z%7a+D$');
define('LOGGED_IN_KEY',    '^0kcF.+:ZsVK1^=1QL4$zh_ev$|x$cOTM[O38l5(K2&%1ZDSdKKc-oJQmzps;nP@');
define('NONCE_KEY',        'dA AvAF!&?pz}TR0!~rSSEqvQO3&p%X_ 7HUU|7gCU<*,du+O3v@q-FPd{pIi,0N');
define('AUTH_SALT',        'ps=QweN})^gsl[E#@MH+j.E<JrceL:b-HKuJsUMi+_;V|n,j:NNl.PQT$MLjAjlP');
define('SECURE_AUTH_SALT', '=}=zt5uWttD}Wpgoguls,.!m1A5-$L$W)WU|#a|ITRsI>++N1Zu}Y+{@cZ V<d*L');
define('LOGGED_IN_SALT',   '}L=U=a6V*N;}$7^plK3qH [DGJM}w?RRO%S$MGF]THELI`8Sk%?4 YGRs;Cw<4I4');
define('NONCE_SALT',       'dod{H$yjfVwt%8?@#|OLmJ;M]TqpK{W3g%t4V(%$]r)o?H.6a/,Yhu7*RPunr{|c');

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
