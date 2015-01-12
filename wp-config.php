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
define('DB_NAME', 'wordpresslocal');

/** MySQL database username */
define('DB_USER', 'wordpresslocal');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '=L01~l|jz7uSs.n}y5aQ2bs]qirKW][$Fc|M3!%n$*e0C4CDDMk1>Y$?wVcA5&1t');
define('SECURE_AUTH_KEY',  '!Wx9O)8eS|oZm&~6=jC+p}m||do5my]u]2nF]9_ Zqz}Jq>24f~Tht>{9zH}PWY%');
define('LOGGED_IN_KEY',    'ra9Ho:f.RE;O*KH]oAOzP31rA#>:U~%p0FN!rISg<hW4k>OF|rDE_2>n$]#)I9{:');
define('NONCE_KEY',        '70N&LNpkNRcfS9+2}*@oXQ`Lm(Swwl)c+nE|{Pi<r ;c9d*F=-zUDS9@XTyk}~FU');
define('AUTH_SALT',        'rwREYmtw3^/6Y3[qtC!+>f4/Uo2.5W[@6HP0-/i&>H=ij%UJ}0XBnKNLu{)pBN|c');
define('SECURE_AUTH_SALT', 't+%}/x*KgZLPIJozaPlT_^P*JUPYM6btn8&)[{GBl|$}bdP9JPAk,Sle+yB!c}Ae');
define('LOGGED_IN_SALT',   'W^EgMg1~Z6v+-5H%VOG2=|oRXS)?D|IJ}zY>R,1#GBpy7K.`c7Ag>RfxOaYPPnyU');
define('NONCE_SALT',       ']+v&49RT3O&-58L;cH-z^by[!H9*]hGg/,[l`8D:|)a5a.|Q@`&FTd^e7uCjoPq#');

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
