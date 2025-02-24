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
define( 'AUTH_KEY',          'tYqnrV6L,>m#G{MLpjSMp-jkWC0)4$Ts.Vmy2vjzR7`<q{.^/],gvO5~MTkV3Whw' );
define( 'SECURE_AUTH_KEY',   '4QXH)l0Ldj7;js?wH4xu=KL#e)9U0uy<Z;nng>I$zI}NG<pD]Y!p:=xrlTT]BE#?' );
define( 'LOGGED_IN_KEY',     'tuyjUBUk7|Pl10A7yOyg5v({b-T:x{*& sZ;fto4T[!zE`}ETi$Eq|b6Q0<kQ~^<' );
define( 'NONCE_KEY',         'U-wDiu?+!TL}f,w8|Bx)`Uabaous5EcGVnPM4_/zWoA|Fu,NZ+.YqQ/cqO- 3i{W' );
define( 'AUTH_SALT',         'ygxr8fy8lwq__^gWQZ{~VM*F]ID bL#My$r@X_Xl=kEqi*%C)|9%Q>P;uX.{x~,h' );
define( 'SECURE_AUTH_SALT',  '.hkz`-$nv2w=ftrZXLb|#2WxF4cy.!^tx&P1_Shxkh]4BY%9B<KlZoz/UhfjpEzv' );
define( 'LOGGED_IN_SALT',    'dK{JS[B^6UwwO`7/ wVV>[<xA&423:EM i7UrNPZT_,GEKLfN8lB|~o+zVug~y[!' );
define( 'NONCE_SALT',        'sMOmoi`d8a,8(D+y^DNDY1o=?hX,p]l||j}|*/^@t-|Rni7{9LN;!K,GgxMcz~${' );
define( 'WP_CACHE_KEY_SALT', '}rM`+,I/PN3o6~SVgQHc$TD~aZn&c6eHoNQFD2$IaoVHs_p=;zD)N,3=pUuy?]D@' );


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
