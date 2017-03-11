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
define('DB_NAME', 'wordpreess');

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
define('AUTH_KEY',         'KD8$32- Lres(U` qa)65|MVba.Dt*X({tM^k`+r[X+,V!A;Sui$fQ<U5M%-^ 4M');
define('SECURE_AUTH_KEY',  '#*L8IGMaZ*!.7J5#t9R:eHrL_Xr;}{qACJk*DAz>/F&D=z4zRyg;nLaI5CG-[gD5');
define('LOGGED_IN_KEY',    'Q^&`l*I ZoT^yBKQut|KYV [$Qj241q#A`~6fRS#M5I8N9tMQQ_GKw*3Zl.3Ah(F');
define('NONCE_KEY',        'K7_%8+D$c>T-!uP%po:&w_MoY+Ef$^QgQ<r4FeeOL`vp0nZ!G[x:^1H=aTU5,~3@');
define('AUTH_SALT',        '5$]GjKBjJHr02n@j:s`a)^3<wLG%qwu8Y|k4{>E5~GAet2JFYK6T#ZV^_Z[/C+U+');
define('SECURE_AUTH_SALT', 'zX/]b*>iX<`O.0,M#6LxR]bbE&r{};4<J#bY{FzN&KU;IL5K|p6^.^*i?Ib{Pl?F');
define('LOGGED_IN_SALT',   '9+VmeT(%W./v3WB`.hhF~|C$b5UhwGd<)w@=#=],=hx8ON2hf|iXz(Vz>3J<Mqcg');
define('NONCE_SALT',       '?ymMj4S<Dl7`|M9kq/u_Js,4i-p]nN~/cR}6+,FpkktlC 7!5:Wy/)9Cvzc)Xfpc');

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
