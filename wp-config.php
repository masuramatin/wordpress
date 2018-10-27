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
define('AUTH_KEY',         'i@eEE63%qMe_)_l*ujP*E.Ic(86u+%x.kAttV-:8J`Z~(6JC2:6#})R,%f$`2}Sx');
define('SECURE_AUTH_KEY',  'J7m64{WSiLDe(P_eJ(`#*y/zDH;GB@.#}JQb1P0Btr4| fFT1rTROW}/ -s9nY3i');
define('LOGGED_IN_KEY',    '+0nnE}KpeTRn`d/:{2p8L}[5B|G&vKIs5w%aKE}K:575EAv2$zh9HD$xZa/ ?vr ');
define('NONCE_KEY',        'y!$(KzFVd=Tc)zP1YKoj&NJ`{(nN}osyN4DBo&|_yKw$2p8<5%,`OTxwV!n`d16q');
define('AUTH_SALT',        '+(=#%=Ifk14fv*HSEG?:ExIC$qAjQbVF:m*/(Vgp>&T6l[g3Rh]G&]6zjZ}lFAxj');
define('SECURE_AUTH_SALT', 'Wg0~qGo*|]!%oUEP<]}bC^SM!S1O;.T;U4`Drz}T+}H4i<6-ihW&Bux|D:[fvVM2');
define('LOGGED_IN_SALT',   '-LVue>5CEIQ9$9zzLTX.@_QEtzD@j#Ib@J;*~i;Q Mc(Irn9.>)/=QR9x{Ouwvk,');
define('NONCE_SALT',       'MUydH^`l}WCRo:pf@Y`wX2:Bk[)bb*J!>-_z{D>w~_12[w%E_)-t@KX~lRq$dwF&');

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
