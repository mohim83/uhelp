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
define('DB_NAME', 'uhelp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'eP(B},]Tu~VI[H8)YlbtiKk[KS18l++^+PHvlkaB~+_M~7}3->cnd+T[|ppw5Dgs');
define('SECURE_AUTH_KEY',  ' /7`=tbZ:x3Zi<-|*{[tME0t,V:DkyT09N^L$;aO@*DsIb:<o9Hb6$T:d#N!vx=8');
define('LOGGED_IN_KEY',    '+>FZJO,(Bx9iQYgu!~+NX:9HgRSQ$ @C-$Is>u%A/Iz$YG[v9FK5==;q,Oy]=sdI');
define('NONCE_KEY',        'T:?oc4^~,BU!RTt*<vU;v+!k9{5Db{Ca|Ohfvv^ X9`D*%Y)/J@*4_i=p8(k=Ha0');
define('AUTH_SALT',        ']d~ZJ#}xYur*2U=9wC{0}h3gF[{l*_rMx`1GK]`oWwwdiYu~VV~Za=cpA&?SqCg+');
define('SECURE_AUTH_SALT', 'ub~%}Oq7=bU7J?Mcf<J%w8E+>r)?o}#J]^1MIh|Yd&Hy)pDNg_N;lpe-{2ZQS1]q');
define('LOGGED_IN_SALT',   'mdNm?[T[x3D{M)|%V{>bYtmPzZf-^n,UYtqBe5J[fD &O{BMEv0QSP|Bm-&f1]_}');
define('NONCE_SALT',       '(gHF8$5T{qP`l+qA=ih_`u$nU;S|<zG:K`-X~3_nIvQ(Xwpm3>=wocK4YG5b0|#E');

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
