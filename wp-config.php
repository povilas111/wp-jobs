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
define('DB_NAME', 'lavisa');

/** MySQL database username */
define('DB_USER', 'lavisa');

/** MySQL database password */
define('DB_PASSWORD', 'trA09YTsYrD1mdjo');

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
define('AUTH_KEY',         'y=.F>OvB@1 mOW-}k#Wf2kow`cVqQaj9ZBYQTE-}Lh`5wXos 3A**($4S5hu[HPt');
define('SECURE_AUTH_KEY',  'VGEK*$l*nA}FC1;N./i$l;s.?>Lu<yb5nE %`6YX9U%ys63.xa]kw[/$kUg;j_QF');
define('LOGGED_IN_KEY',    'Fl*U,fI(nRbMqCU+d@Ggg*FPg6E!fN/9jFtk1~#alZMmz28ScO]].}5[Rf.a4+LF');
define('NONCE_KEY',        'R=fB{e/W6<!f!QU@uD& v1goe D U4WMYaSS98$Er5j=MW~{;RG]{Pmw0}iz]yi/');
define('AUTH_SALT',        '-u]P8>SuL4BR6x8077Zo%[3Y+N%dv<%Fm`4caF)F.JQ:(~LXiCSvU,dr$zFiP<c}');
define('SECURE_AUTH_SALT', '}rCt;MSA<d|%oID|868i85 3Ig:vf%_ @*EI5[h-EDy?Ko>U:%m)iB(c?1E0.I|L');
define('LOGGED_IN_SALT',   'n`M&/78NHKUTC8YG4K^/&]1m9jNV,fAh-3W*P++e(,:>c+AY!nW7;]cn3LA;o:oW');
define('NONCE_SALT',       ')3ydpedBify~VPvJ$R8+m/z/N[m*%w V]XPJ[zzFG]**RX|AL/.)Gy,O}@SBCj$P');

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
