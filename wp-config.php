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
if (file_exists(dirname(__FILE__) . '/local.php')) {
    // Local database settings
    define( 'DB_NAME', 'simplyvital_db' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', 'localhost' );
} else {
    // Live database settings
    define( 'DB_NAME', 'simplyvital_db' );
    define( 'DB_USER', 'admin' );
    define( 'DB_PASSWORD', 'Jansher131269!' );
    define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',          'wP>64*Cm*xTIei7,4i>}_NMMVpnEYvr|IhqO_}%DRvGSRFt7wY9]s)oPw/oor7,u' );
define( 'SECURE_AUTH_KEY',   '/y|LfDKGco,&DAb_{_X!nd)HVbg^Dtl7uRzFKwOi4.(!E mlX.Eh}~jwUH7XYwhH' );
define( 'LOGGED_IN_KEY',     '4a6P``Z%oa2.#SygeU2vLMAhR?O6R&kofDiZ So;PSZ#)<v?1!.lz&1Vyj$1%yAq' );
define( 'NONCE_KEY',         '(o7T.1|u-ZKuFeB`+*0WW-N&JF1jp%nYhK,ZMeiO93Ea]O@|pNNWg{Lv!1ViBi84' );
define( 'AUTH_SALT',         '{eggZO4OwH!@St{hxO7[Bfkd.wgFcm/>E6-@6.|y3SGsm=(,]Y[&~/O AY1=TVMT' );
define( 'SECURE_AUTH_SALT',  ':kL )D0Ik?p8`7-|YNcmW:O!MikmN+<9fGS%$M.AMfp#<-yw!aFYa Qc)ZqJxL?O' );
define( 'LOGGED_IN_SALT',    '/9H7P}ev_=C(YI-`^N rpMP1.yMpj)OV,$M@:yDFfAhHE0g}Yer&Pm`]7O$O%/y*' );
define( 'NONCE_SALT',        'W.xv}[l,Hk{*2ES2:IrLe2MOK@{<@`3X#%.9h;Lsz/%^]par>7gT:!V2J6((XEnl' );
define( 'WP_CACHE_KEY_SALT', ']CVz0UNhiXgVCL+iV/84{)*9HO3;ph8JctwSK>d/e05 rFMA?F8^[GM.Oq[!_?gy' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
