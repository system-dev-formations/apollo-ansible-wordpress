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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         'Wm0(&8VA?~k0.ey%2K@zI6zhs}nfiAhqX.g5 %*kb%7Hd&[]-(QD/WW>CLC1}N5N');
define('SECURE_AUTH_KEY',  '{/s}/dKXBs-+%w_akf4yMp2l-T.v>*/r;NH`9{F0 _%0TAY!O(e$s}9mnBKixI/L');
define('LOGGED_IN_KEY',    'zRi2V0k&<_Kfzumit{DJ!~Gse.{o`{^LJ#hu+Rb2MWw :.>^ #_BAFsS$cC9eR~?');
define('NONCE_KEY',        '(X6Rq~7Vpt#OwK)$2HD$*A|!RC(RC0RUdFHO5C3}0;>erCkj>~hTgb-^q)fe^p6g');
define('AUTH_SALT',        'jJeQ5d6I$id]#s:T{A&h,>:_k.i,Qd^Ac}L=L^KZ^3>ix>9#i^?Ov<9moUAVl:N+');
define('SECURE_AUTH_SALT', 'u&>QKe6&TR= 4Q T!lmK}fszgXqF/4+0cU $zKI4*X&RysEF>9vCaWu$+lI(HeMu');
define('LOGGED_IN_SALT',   '},Szaj&aj@ 7E+airk=D:Rrl%=EFrWtXuN`u1(w|@KR7Y6Ao23+rR&ci08PSJKzY');
define('NONCE_SALT',       'LO~S6B<>#iISc8>zP{U_M3$XU7h~Vs=eYi~xgai[AyjE`uaE9TakAX]8i{`lOL&{');

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
