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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'mMsh`:LzJ)Z.(7!d!E`hnPfoJI[e=`mO(}jOwjXIa/&5(RS[5,e`nnZSB,A*n,3Z' );
define( 'SECURE_AUTH_KEY',   '&@Silz:G<6@NMC!0TvZXR;:t2=CLXH}y1c_XblwM<$eG]S% |/gLl~KpW5^k;yK?' );
define( 'LOGGED_IN_KEY',     'KM5mPQNW+ZxCpuCOp-23uLD0yI(x|5</o51EXB?>SgKkPlvZi,v!@)o]4mv2(T5+' );
define( 'NONCE_KEY',         '|WFgv*F)D^+!wvYNO8sf$nc&Cy<G%F|=PQ8@t)Nmz_POu3-Lq*07&gCC&1]JXdNx' );
define( 'AUTH_SALT',         'j/[B[*%Fv.NbqSd,)!~`6|%h7z`r8@<k)RPC1JgJ>:x]s0+cKwd mQCRoi7n%UE~' );
define( 'SECURE_AUTH_SALT',  ')DWf~IHJjR Y+a]W}T*_r+sR6P9,QB/_8aM(F_.4: mIIyIbIvzh;xV)m@*,F93c' );
define( 'LOGGED_IN_SALT',    '`hmauh:mibtK{crtI5H4Gxd{:-bI}/#RNgkd-b]N(BY2Xl)F1a$]4>@YN&`mA3q^' );
define( 'NONCE_SALT',        ')M;{D!HAK;(O/w/}cN]$Wk52|qh!bXQ%$JKFi#j59Dabj^2~i!(YHw.eOtXZz|^a' );
define( 'WP_CACHE_KEY_SALT', 'ZlmxN!H.wE>^~WLmb s=r5oJNaAyt=^j53Yr8-dZyaqFs~:I1G%kh}P?n*v3-hdP' );


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
