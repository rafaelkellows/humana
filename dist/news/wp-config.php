<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_blognews');

/** MySQL database username */
define('DB_USER', 'db_blognews');

/** MySQL database password */
define('DB_PASSWORD', 'Humana1@2Magna');

/** MySQL hostname */
define('DB_HOST', 'db_blognews.mysql.dbaas.com.br');

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
define('AUTH_KEY',         ' JE|6[iX?k~s:o|bh*RW#!g#k4j(4L!C]pQ0|Wf8{0s~2I3HhHT0528#8s#/vM]0');
define('SECURE_AUTH_KEY',  '5t#k8#,P*K}M/E__A[+Hf=A3-3|:uBV]tB5A]>sFervsi{FH-Fyr%).U=-w3Q@J?');
define('LOGGED_IN_KEY',    '`:|fLq=vd6nob!vHg4TmO[4y_3Li-X25ZTp[lg{zSIkP;s=H#rkd4F3^3OJkF0>o');
define('NONCE_KEY',        '@EB~Z9$Up)&z+S$%[5%2p$.|jn#YuS[cu@:&(C1]Uhep{.JmPFoxk8W{Dj{;:}9c');
define('AUTH_SALT',        'fl_-7T3Kl!|Nl0VIoP+7n|ZHs+i<>1BGu+$Y_n{%iaM:|x,|MUelxM0yte-`@)Pm');
define('SECURE_AUTH_SALT', 'V7Gt_R($XWuP;EDlx98sIuT.Qq2`o|1!|rSd0FA,R;Nh}f.Ir`.G=TBh;e&O#KN`');
define('LOGGED_IN_SALT',   ',R`Ml(S+t5NBhxdQW,J., d:iKx#]j84=VR-GY|>ZZu+ifB@Xcq*$J9.o@a=t>wM');
define('NONCE_SALT',       'iSx$b>VJxwwW?r#igi^hV;^w*r=c%yavbg0iDkV|Z`Q=T%Zf/lNvCJj5icn=TzVy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
