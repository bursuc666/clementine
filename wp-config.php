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
define('DB_NAME', 'clementine');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bursuc06');

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
define('AUTH_KEY',         'vB+=B]X(,Pakfa5f!:b0Z}zH=[,cM?n&k~IZ$;x)yfF}G#tm^Z?fE*UOhxlAjyz%');
define('SECURE_AUTH_KEY',  '+yj/)jU?QG|wtDD1b:/A:0ks_MA+1g~*0>#<U V9$PqD[qA|bpkEj!,Z$TN9+:;J');
define('LOGGED_IN_KEY',    '9$QuVT!Uj?ba3SXdUXTbcz$vgRt31<$x/3Dc,>{a f|D;ISUdk3/s,~U%tQ,q53,');
define('NONCE_KEY',        'xT0$]**t1Tf31z+w~GXZEs<nYHRY/R.TMMTsp;IH];rz|0sFux^nIMP{<0Ds;jj9');
define('AUTH_SALT',        'PklP,[O3V%W~81m|ytz`Nu7uE)9Hnrr^~0xMrE%%&|A5;id]>2#/I-R,e $#A2@@');
define('SECURE_AUTH_SALT', 'DQdj=gWx7MHCd01}uMjiET||T1{XTy+Lv/SI_@^cF<QR.txR9lRz>:U`oKAj .mM');
define('LOGGED_IN_SALT',   'S-mxdT.,$lgG^;CKf(g+[u+VGw?rpf+]3?DS7/5:$|EK_XH@`Cbks@z-RzeXu[eZ');
define('NONCE_SALT',       'dR}~VY~yYzFes>OoKM2Z#n!}uQ L8J55Vk*574GJ+z]Oq8qSBkb61#0+R~W/c[WA');

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
