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
define('AUTH_KEY',         '8yb;Zxp@>%g99-JvePm4zW^h71G#2!E1p!DR $VG^+7PZ`m^-$ENA{W #vOga I+');
define('SECURE_AUTH_KEY',  'cGuM;$2.}hG/m>]{%vmOdcQFJN&_8?.3/+)%k}QEuOp_FPfGR4&Ga:Y^N1m$R_j1');
define('LOGGED_IN_KEY',    '&gMp#yt,f<Aj+4dWK4D| ~[_[--5xbGn @ ZQCS:$)^4X;oJ!W,+k><u&A<tH}L.');
define('NONCE_KEY',        'g5e(RC6pO-Y?O=jf.|!ar#3yJZ3@|`lY-2CR-;Ns;0>-)G04[8o:5Et/)|,3IIG:');
define('AUTH_SALT',        'NET;g-_{FF&$rn];/2T<ktXz%;YHa8jI-6^v(b]u<Eb60{3:;9RU?Z;z?C,{+EIA');
define('SECURE_AUTH_SALT', 'RHArotHu:2s2I63,h^Jd`XEbHF/ZgnQsYf9L)~1bWjtkaX(d5dJlsOAs1bwQ%bDe');
define('LOGGED_IN_SALT',   '7SgwX5X3uFQ.lPh+Kq)Cz}-YQ/B+$5mp}r!E PVT-~=4d_zEkD>Qp3~d%g?+92Kf');
define('NONCE_SALT',       '{:LrzWXh#Mzyd2xg`>_tA%rsmw&99.~Q^x|-/B?}/m)ic!LZDsP^=~aJ_#syJ!Wa');

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
