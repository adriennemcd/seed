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
define('DB_NAME', 'seed');

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
define('AUTH_KEY',         '|vJyk@qeMf5!FFMjce`.n$R5hdb9k&W )M2CLN|6BZsMQ1f@Ab:h~2WGJa]~Qg.T');
define('SECURE_AUTH_KEY',  ']P-@Hj31v][M{BSBw3FFc)g;6R+]}T.xpcdy<Hd9>|gX)~me(;h[VJic/T3oe1&M');
define('LOGGED_IN_KEY',    '}y->E;c|sstF`Lr_-STUCLq24/G}B6RLq5cbC{Iz)FLew}]K/zleA%&(,9@5hbru');
define('NONCE_KEY',        'A1.PpZ@UP3z5jh3zz$%Rv,@QUDvk|HPn_9(Uc~yYMsPpQU:d/^%*,pG9i`eav>>#');
define('AUTH_SALT',        'oK(0jK>d0JIyaKi4!dU@[Q)m:~@wr}6sRBZ[mr!R/@2Xm)iFVxj^4@cj+1L;GGe=');
define('SECURE_AUTH_SALT', ':;Gt][~4W#Yr B^*5ZRshKcAx]gGp={jjT+A.*>G[xi4:cDXLe#0&evKVw/[Qk>)');
define('LOGGED_IN_SALT',   '8*ZgeMr,Zn57 NO-?@]#l+- GdIB}!!@p;TXSCW_w-o3BCji1r/}ev>9Gn6ml<EX');
define('NONCE_SALT',       'GUBiZfSrn7:=Wu Dj?o~07%=wq6Z7YjvOB,3]9g%i(2]?)}KgGrm=0:+eoz08h/Q');

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
