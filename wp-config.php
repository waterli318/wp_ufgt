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
define( 'WP_DEBUG', true );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'unforgettable');

/** MySQL database username */
define('DB_USER', 'ufgtuser');

/** MySQL database password */
define('DB_PASSWORD', '!qaz2wsx');

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
define('AUTH_KEY',         'Z.iM>*b|F6vV@M{kJSr&1CyHd`*+at*B4:N@n46?{.qU ;0}dBY3_60+Rbcx;q+5');
define('SECURE_AUTH_KEY',  'TXy-l{S$d;_7UkuBR.(r9|N2@/qNs_oBg-!vj|(]aX?7)#E*d|.&Pd#/vl`QAM|w');
define('LOGGED_IN_KEY',    'DM73&7y,g`f~|QUi3ZM8N.g~d<Vfv]*}CGxX+1JkN1;RPr;sv.uTX?rdkEi+]l-j');
define('NONCE_KEY',        '^?kA;Hq))+wNdlqx^`cn,mhcGJ07$20`<}vMtcHra;(MedLU !m-qc6dXq-<Jo|Q');
define('AUTH_SALT',        'AB*H8q`<x5@~%@KtR#LuoeV<EFF<<&dVT(te17mugZ S(d#g*qsj&bGY Js{.N7L');
define('SECURE_AUTH_SALT', 'p;9dt&*Dq/n(#94T,+7R9z:k8w;8=i~N4ha.c/Ufc<~j|>84 RXzuE-P``j=j&3t');
define('LOGGED_IN_SALT',   '5SO!{DT0IqPk`L$E6$[f}]MrP&Fdv7/~hN;3`5x7dNqmapJ6W$3=}jH_.%h%|R8:');
define('NONCE_SALT',       'lWze*qg^+m0h9O7UORK&taIJy!j?h2L}#&.;I3!|u9Q?*G,iEPQLB>n4VL=hE4{B');


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
define('FS_METHOD', 'direct');