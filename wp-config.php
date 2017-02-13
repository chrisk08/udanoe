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
define('DB_NAME', 'udanoe');

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
define('AUTH_KEY',         'nYyUc%X^}[FAz}/<1N@_qk=J.B,qk!f3E0DC |ul<B!,kc/n+xSSL~@a,vj8j]98');
define('SECURE_AUTH_KEY',  'wR0h1X*/^=9;tI_b]Fw|qTF.jB^4 aS:JZR&aN)IV!cggCu;]W:aC2Ic d5 )=1j');
define('LOGGED_IN_KEY',    'mGEr2orw Q_;+Esy662b:zc`$=4aJHGD5s)1^hw6z.veijD{yRBdp#!eEaZGX$*[');
define('NONCE_KEY',        '*DcEdFz1K$>l3S_&<YeAt5][2!KDr[hnC{D;=l,VC,svMJV]8j5`SLM}0_q(B.?n');
define('AUTH_SALT',        'rTG3R;8t>weV%W7OK;I4$<NDHGT-m5(grl>gTnrx-u~/g2&+1Ym;~MoN-||P0Swe');
define('SECURE_AUTH_SALT', 'UgZ9oQ(HxR.,%.q)Y<tF_L,*[>`{}t#+3aV5x!/d4xCbhzN?SRDaFD?(x)s[0GuP');
define('LOGGED_IN_SALT',   '7j-_QxO]SaX/I^TQ {gr-Nqx>9n>&Re.d#A$iL7h{;|4#sAEA LyWRTtKTT&jlCE');
define('NONCE_SALT',       '~R|.bA2u2*6o:*(a:fEH?tALM{g5.s~(?b%$W; d4yBcV`m-![t8kP3w~j(T+V[W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uda_';

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
