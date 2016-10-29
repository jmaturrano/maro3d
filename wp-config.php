<?php
$abspath	=	str_replace(array('\maro3dstudio', '/maro3dstudio'),'/wp-config',ABSPATH);
include($abspath.'/server.php');
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
// define('DB_NAME', 'maro3d');
define('DB_NAME', $server['database']['maro3dstudio']);

/** MySQL database username */
define('DB_USER', $server['main']['user']);

/** MySQL database password */
define('DB_PASSWORD', $server['main']['pass']);

/** MySQL hostname */
define('DB_HOST', $server['main']['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/** Lenguaje de wordpress **/
define('WPLANG', 'es_PE');
/** Revisiones de POSTS **/
define('WP_POST_REVISIONS', 5);
/** Auto guardado de POSTS **/
define('WP_POST_REVISIONS', false);
/** Guardar las consultas en una constante **/
define('SAVEQUERIES', true );
/** Desactivar las actualizaciones automáticas **/
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
/** Desactivar el editor de temas y plugins **/
define('DISALLOW_FILE_EDIT', true);
/** Desactivar la instalación de temas y plugins **/
//define('DISALLOW_FILE_MODS', true);
/** No usar las versiones minificadas **/
define('CONCATENATE_SCRIPTS', false);




/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7P4}od+Rt%xc_@1<-ue0DG#xDwS@scx`MVYpC-/Bp0(H3G~,n:vO(< <Jgn`~lX:');
define('SECURE_AUTH_KEY',  '+gQ%GnA!9;FCuP-i`4Z eb=w-+jHE6^qUu[T=HpS+v0e?Oo4r]g<=498{J:PRkAw');
define('LOGGED_IN_KEY',    'NC9_n5=6Aa`*fqF5?h#,_XZ<96>d&-0S|~_s7Vq#GauO@k,MWLY6oSrYs:~5=I8)');
define('NONCE_KEY',        'E9*j2Q3J~fsX^^{0!CRa]jrpPF5|QJuP2*8x`/*L6e.:IBT&2GdQ2]cR|Dk/J7kB');
define('AUTH_SALT',        'Hbc!w.XL?jX`BB{  <^/345eX:YnUb=$/%j::g<laDy5[h0T=Jb$O15)5UOtm0S_');
define('SECURE_AUTH_SALT', '!17@*,kbu`?TQaapZXBvbKg%6CcBVCGQp&mD9DP{Si+A^28>)2t~E}@[/+AEfF/W');
define('LOGGED_IN_SALT',   'Q<]g]Hn9(T,Ak_4|(cI1)GvYe<O3^+Bb^!^y=#@k,vBMD2u8PJG4aoE{+h?0yL@M');
define('NONCE_SALT',       '03eD*S?<f!jm<081p3c&Bt)Hg<RJ*.;&^wr(#nouwD d0*r!@,KYuvl2lg];Fu#F');

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
