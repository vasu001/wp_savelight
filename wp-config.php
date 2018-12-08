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
define('DB_NAME', 'savelight');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-0uiOXMu}h1aP!%  []5G9~?>Xd-qso~tDuQ@-g1/nbM.]>*O8ae(%5{RY3rX(M+');
define('SECURE_AUTH_KEY',  'WqN`M=.OvcX9${i>@Ws{xX|,i@pV8/3(W`C]{)C0<``:eFQfLi%THj^`pF^#X JO');
define('LOGGED_IN_KEY',    'CphI`tr:#yZK}7|97Z Wv<[skHD<##xLfk<%:L.&o}];5f3F.|;J}$lS=0x+49TM');
define('NONCE_KEY',        '$bFoW*bj<k#u 4q n9$Kh[Mg)V{}R_E>oKaSUUp!1=VrU;bf@uW8n1C3lVm[D>k8');
define('AUTH_SALT',        'lOV]uR+DYVyQ]hD]d=*$)2<)awk/WOr|=]G}IoF%[7_KE;y?#tUf1s&ZquIAg5I,');
define('SECURE_AUTH_SALT', 'p?swOeYp|,@ezX=^@W: r=:8(=n;7>MDZiSl!h+!*TEi+sG*,[8g60}.-.B2PPJ(');
define('LOGGED_IN_SALT',   'TA,tqOSo8/|iKun^)Kp0S1;3(^c!OWZ-r1#+O%Jy:XbD&L5Mt-Y!N_TVlDO^[@80');
define('NONCE_SALT',       '0[}$p78HTWOP40oW11gL,ea>hR6/OyfNBO2o(<UiA&{3D$4tBh 3;HQ~^Zy+C:#a');

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
