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
define('DB_NAME', 'mywp');

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
define('AUTH_KEY',         '$X5[@Q$y[1h=GT4Afx$YJx|aIwgVq-pFmIK|g%ppspi1Gnx-NGAanr6_j&c gU4c');
define('SECURE_AUTH_KEY',  ';GOOdQzlIY|!EfOJl`-;qA+hJ&Q*[:tyn}+B>DI^jQ,dyr|[~zgpJ!N[vME>*/B8');
define('LOGGED_IN_KEY',    'PV:Cj a&6iDZe^d|7N)[/ DH&v0a]nfp{]+H;i9tC|,;]2R3|%^=-Yif7n),1ge!');
define('NONCE_KEY',        '233F+%I>1d>l4 kgEGy#uaMMT`) ly0Ix]59h-[=pf@*%Di|f%^~8Au#S7!8d0Gg');
define('AUTH_SALT',        ';/Xoc2a!^Wb%Pygv<1V+BGXF}W|YeXKEd_}+3Fv+-JLD!y-N,<]lQLq+!)e_%AEV');
define('SECURE_AUTH_SALT', 'M|5;];A7mgz#~)mTR3on|:<F>_Qn+B9]qM>d =IF0zzCs,lhm+F]bL$KxuqZ 0SH');
define('LOGGED_IN_SALT',   'G-Zthy% $|a0%nw91?J_5=,JA:el&O|C$i0:)_P4`1?!Q:^`Y+xT~uXu>dxVpuOR');
define('NONCE_SALT',       'W[(3877`&Z 6:D/@hSKL-lUmR_h{6&AVrmijC3K/cQSU|,by-bPuPc|`c EYtny8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mywp01_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
