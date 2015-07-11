<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'homestead');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ';nxWB!fqd@l2{q=3dJZd2rJhtE5H9Pk?SQ*U]7-s~Eg7s6bbJI0 9|v]|o{B@jIG');
define('SECURE_AUTH_KEY',  'W>fn4x,Ee5$Nk%|-Pm-+{pE{K0c6Ce9|KAREkd%{EB@%p6-atL+a<RJw+Y_][Wc ');
define('LOGGED_IN_KEY',    'v(%]cp8)NQrhgp{PbsoxgmwHYny4hU(0.*W|~JmsL  c^?-~|*BloqOMGR-^r].`');
define('NONCE_KEY',        '(xKIYi2d~y7@k%q&>iDW/ud|&[<>p2&<-(2KfpG;H$NhAu/HyZ<~YGMFRSyE)!4G');
define('AUTH_SALT',        'O3?952Xst3M^Cv-wr58h]OGveOo+4FoCW|,2E{ti/[yZxn1]4<MLp+pg%Uy^>f!K');
define('SECURE_AUTH_SALT', 'ChK&!zHITe~+!b%55rya h+!.5,|T>lu(){:H0Jjt}3:r.}k9hrSFnd]R$[^=0$&');
define('LOGGED_IN_SALT',   '{la8tWW ^zvpo2<`>)!_<NsPcc>[D|%Z-O-ebjS3CGOz!2>[|7;%T_NNk:t~9BNP');
define('NONCE_SALT',       '}HO/+EM-HOpn>9@|Y<Qr(z9^dlQ%t-j`z=19zrTddeMebdcTYMc9+,3VI5fqu@#$');

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
