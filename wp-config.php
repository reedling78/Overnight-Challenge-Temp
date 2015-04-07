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
define('DB_NAME', 'overnight-challenge-temp');

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
define('AUTH_KEY',         'O{J#[8U?<#X&2=tw*1-+/(+&X(!![Blzo8rsn]_sl3Kf4*LIcNk)ZPYFO /G7VDI');
define('SECURE_AUTH_KEY',  '_]k0rX0J6mXQNFpg|s5)0+/n)1}n|r~+5hXu$fVc)zjI9q?cY{QY,c-6m%tfx]G2');
define('LOGGED_IN_KEY',    '~JRyc_HPIWR+PsF5D%9!rfa53}K-fXhj~3pL,l{:%IOzQec{CZ;Du8D3^zgwQmcY');
define('NONCE_KEY',        ' 22dht><e>H@D;@U1#AtjqQw-XQ;(Q8wg&)gwkuM1C>TY20>x0YBK}X[w@Z/w]e!');
define('AUTH_SALT',        '%LoI:zcsn2Q4$+&@2r-c&[+ED5/-#BT%1)BI`8b2^vwLNYY|k+uCu=n|dVY_Z}s[');
define('SECURE_AUTH_SALT', 'G.}!e7sG=#p.Ad<o1O1O>Fi$j=(%k+SoJR*z;]T|j`t7Rz1$0MX]6-o}yT5`&t,;');
define('LOGGED_IN_SALT',   'M5~=p--UFD/Rsaj @ViN;XJOVo>cu&R$Pp{8FH-qb(Y9`-8?3OiAdS!u2uTQ[X<:');
define('NONCE_SALT',       'et1.e7e;E%T8sSkVdYaM<63>SKMa5i~pu/4+EBBXV*WzJZ?X=?&Z;TSlv;+Kv5KT');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
