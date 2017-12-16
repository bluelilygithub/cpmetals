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
define('DB_NAME', 'bluecli1_cpmetal');

/** MySQL database username */
define('DB_USER', 'bluecli1_master');

/** MySQL database password */
define('DB_PASSWORD', 'Templeogu3()()$');

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
define('AUTH_KEY',         'F~o2<E7gMXRvWg)dE3jw-XKQ9|]=jV8j4.H8-T{Dz+e,3WUFIG)z<(.b>Pwx|g!}');
define('SECURE_AUTH_KEY',  'LCkngDwiZOqm# t|vxI6j4d5zKWI(AU$;(Y9R)beg( kiRHhw02^]{JbvC!TIGqA');
define('LOGGED_IN_KEY',    'EOppu9nnq/2mbln+t,oSH+d$SpP7-/a@=3Z[.gX c;9abPzbYjhy1,96iI>jCNaA');
define('NONCE_KEY',        'G2E)Fv|Ln`C[Nf&DU5NGD<u6?} L8H*)Grm<3?a;M5%Omv!AC&{N<vl65P,$h[re');
define('AUTH_SALT',        'Gf?4eb6;ILBit:FU0tH?1B2opT0^94mP!J_r5;bdY51v/<[%G`c<nUGEa`uNWkqW');
define('SECURE_AUTH_SALT', 'AXfP5Q2;7-8:m~^TX-T3@cE<fS!^5!HZUhip/O8]D9mN9;9>26tlc]eCUNHzrI=P');
define('LOGGED_IN_SALT',   '6|a{k#/-Vt}9P).Rts!!I3@LSK}j.X2+9uzwLj{gB]1jGfO1~pe;8>uS9]E<{*m(');
define('NONCE_SALT',       '+.u,Sl0-IB$D0[%ITE=HrCR2{+c}+BIvK`ZBSHX37HEEutFZ.DU]eJ-zsnqc$!WD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cp_';

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
