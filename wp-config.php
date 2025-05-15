<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'safhat' );

/** Database username */
define( 'DB_USER', 'osamaimar' );

/** Database password */
define( 'DB_PASSWORD', 'osamaimar' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'u[/_I33nX}w&{g??n#_&<wQa.vcw]Qz&z3KC(lP1nfP_S#~bS=:ZW1o*QQ, g_=y' );
define( 'SECURE_AUTH_KEY',   'G^R-HhA((]2Hk>X3Vdt{(tP7&r;xzln&> `;YaFmlLL3oE]`^o8Mf$;mNW/7Z2Of' );
define( 'LOGGED_IN_KEY',     'HAyT+/[nAn HFk$<$9~70.N%|{~>)WqmKyfK&|f ,>Q 1gp<ju%{@xS.|~~A(SJE' );
define( 'NONCE_KEY',         'h1MSE=T2bl9 ~T &6t8Jtlge{0*$HF.BR`K) :wuGhhnC[@8f!wz:`)W~`:?){fw' );
define( 'AUTH_SALT',         'xj3p+5@$?l0OnHpVgs(Z/ ~^.q4dBh?ay$xJx%6OC~g?c%?{U>(y^Whq)]Ufyl#R' );
define( 'SECURE_AUTH_SALT',  '2spL=-{CVYc9@oIiA#bL]na8S2<G~9Nq={ss[q4wi80%Vx3f]O(~s5`}o-bsla@K' );
define( 'LOGGED_IN_SALT',    'mmAaPu~>e?18edvft/K#6~6lIs26omgpntp1D8A,FV#YF3%sJ-L&c1IT*`P<(Sii' );
define( 'NONCE_SALT',        'B8~;yi1V<t_qq2Gi;+;BFP8iGpnNJeHV5xjK.2lXSNSSoS:eaCRARG6PZvdWNbo.' );
define( 'WP_CACHE_KEY_SALT', 'VwB1`h*~fzC+=Q9}oz|0+g`?/Z^S+;4(Uw!#-)ZbpbTe1&hzUo&7 2k)NftEvo6k' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
