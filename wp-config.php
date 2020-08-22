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
define( 'DB_NAME', 'rajusbakery' );

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
define( 'AUTH_KEY',         'q7Y_9LfXCQ*Y(R;kM.dJ[f2_UDf-<i+9xn[o^P7P9YV?DD;6.c9c$SoQ%>7Dq#9g' );
define( 'SECURE_AUTH_KEY',  '4i`Tte4Ky]k9.pB;zxc6ci{p#US^lxzH[(:OIv}|^L2.l2rg[i;O=1,t<(aBJn*?' );
define( 'LOGGED_IN_KEY',    'db|ugqN:7r~WjrI;vo+2Vwi!v%//-PC!c5p@|W{dExwEMuAm=XX-zev&_U-{u3wr' );
define( 'NONCE_KEY',        '-&C=r)pI:,RZ*r@XQqBqvPW$G[&GweU tW)nv=tu@dU6I!>Xqm~@$pUfz+ +&.Fa' );
define( 'AUTH_SALT',        ';oN;at]nUiD>}%(Bh]|cJ0Dz*g&3!TcWhO`>$-= !dV%,B#+ -vT>  A+x/{O&4p' );
define( 'SECURE_AUTH_SALT', ')(Ar>TZ722ePSbG/~F7Qafe@tnE{XSJ$i~TtwYE(~S}]+W;JW,&0S+p+RuPV`vmo' );
define( 'LOGGED_IN_SALT',   'W{}WzU!3;Nr-6f:JzanazmGx$W@JG!5?uwUvK+:rV?/-cI03a?j@onZ#-Xu3Wj2n' );
define( 'NONCE_SALT',       ',/%=O,zrAf1qk0,M:tnMEd<TL=7]l])u|t2Rb{6u]2Uaav~BxsA%>q9dzz&XNC+C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
