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
define('DB_NAME', 'base_mdulcie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '2Gun@7WhVA,{6:7~YgEFw)J8b3Tr:KRrg6]e4k*QE^/{9Y5C^b9sSj_g|C:SL>Xq');
define('SECURE_AUTH_KEY',  '#.8}r?uXc<-}v&q,@+>;-X@CCZq*48j28Ed|?H8=N0>s{t6wFG4K[r{2]J))tfz{');
define('LOGGED_IN_KEY',    'OOzt{JNSW;b8zy&#D*4vD|r4]dGH>Uy@iH=(/p-5Ws*0Q}QMaEqEx5N<jx.AZNQH');
define('NONCE_KEY',        'N?fuXdQSt<%+G8;N#C}?^IQ!%$Sq6;Iqt2-Iqsv%y++oS!1C;n[ef!TYSvJ_z8-z');
define('AUTH_SALT',        '[#OU:!tA,)0wZh JIYoK**b%[wwMAhlvE{P{1@u.I:ijE <-]yE[&OPZFXy|fR2Q');
define('SECURE_AUTH_SALT', 'd[sm&hGE9&zJ2(3`AW*ntE^S~iTigseR+o:^,J#E0+ejf{7(V[7u]F|Ga) <n/)y');
define('LOGGED_IN_SALT',   'Hd+10M/<!*l[PI((X{$w6vn~?kG6UX+F6vw$mX5z-3hl/hXkYx:Q/;nfgDRO0]&O');
define('NONCE_SALT',       'j[qcQ;HQRM*Zn2:GH^m]_tIG}82+IBLH4^is>I|]A`PQN$?a_LdCz@6t;[KNtgp~');

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
?>
