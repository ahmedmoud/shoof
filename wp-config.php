<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoof_wp' );

/** MySQL database username */
define( 'DB_USER', 'shoof_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xRsuBJ972W5U' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.l%,JBODpIf-qM~9^=G@^d4MssWsd?f-Zh4bl4uvzVfNu4p[enTq6MsqQbm2lD/K' );
define( 'SECURE_AUTH_KEY',   'EAb3+w,pTCBW?k~lQzqZ*YF:v5/}?3&zF;d#-|u5+:Klw|$(gk?R<7vV`jd|FPnM' );
define( 'LOGGED_IN_KEY',     'V+)}D*Q$Sl@Ez`:1b)cJG/TNVGtdz71,:Tw<a_pa%UC4TTB]UsVn8!aOX8RX-qac' );
define( 'NONCE_KEY',         'O%<|-55^4nO;IdwoMP!yU$]=%z_Yz(4 k&GsxcX8w>OHM!5RwNuzu`HyID%j&FEo' );
define( 'AUTH_SALT',         'XF>D O@kj/V9uG%u^<aApZSdM$0x)~ZrEowM{H!%xn_Z1P0=fijmTAf/oM/B5Ki6' );
define( 'SECURE_AUTH_SALT',  '#~MY0[hhV{QWX<OS&nIk~@w8o$K4oWJrk7}F@|YA](7im47Jk`RxKeRH,MI~r%t}' );
define( 'LOGGED_IN_SALT',    '`{(.4c:;q!xCqLOUC^|-gP(ji-FMF%`2KCi;DZjM`Uti9f=CSiUu;eGkCH;*~h>[' );
define( 'NONCE_SALT',        'FK+[]s!r7HXUs?URmMzmSAFlbvp}qLZ{})Vtpw1cRZ-P@d|dYeXA1|7QuOsu(Yxr' );
define( 'WP_CACHE_KEY_SALT', '#P/4$[${3olhOY|TzZw5;(Zd=9FCxRAj?i^nDIe-q(w!mgM%ZRog~ly+DXUwOHT(' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
