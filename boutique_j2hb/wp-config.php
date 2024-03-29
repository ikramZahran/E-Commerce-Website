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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_boutique' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x%t~>)?m;#Zz?7QwO0@5{ANT<l2`d?*!6(%`]  CA|A_r)>y7%4$Lty2aS(D^PgR' );
define( 'SECURE_AUTH_KEY',  'A|?yi,dy~n%/%(v&SAMjs!##k-A?o_hQKuJ)-<[V~L=v(sr<9:zsYAO`56y26pNE' );
define( 'LOGGED_IN_KEY',    'T9-7*u9EGu9lnVG$Av=bSzMTM$&! siMzw;(_45dNA@H~oyw<]lCd&HUzL4?:[Ky' );
define( 'NONCE_KEY',        '@Sb j(d3]p?[)1f6$FS$*STUp-X:A{|eBY+G:;s;M8)>p[jo%fbOYn^MSxEL0FyH' );
define( 'AUTH_SALT',        'Yd{T&uh txJRl(K?aWE{3UY,OG)Gb^CBC@.cf=,Y4t&a#I/6uF0[sc&83l*k6w!5' );
define( 'SECURE_AUTH_SALT', 'fc+x.#,X<>/Uf4?b4(]i[]8h]Y%,EFW~flg/gQ`)j0PO@T7._KGpJ,<O}oYYXPuJ' );
define( 'LOGGED_IN_SALT',   'gVZZ;]<4C@}YQY1x;YZW{D<Zj+*eJ)ng^vMXO?VC:}=q!2Lc{^.{Jc+GvArS_.Hb' );
define( 'NONCE_SALT',       'j_cO5kV;Sg8%`f24tYH1He;_D+ ~Z3XRn_63drs~HW.KC&fE,M=J@v,1EAl$N(j/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jhb';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
