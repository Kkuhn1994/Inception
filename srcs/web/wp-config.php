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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'z.O<Xu/.DL0H7h!aS5?AhW6>y~Yh*`v,@,r0StpVXw1:I5#CS9GIol`N$%b}mBW=' );
define( 'SECURE_AUTH_KEY',   '[`*5TiBNH:K5wW_8s*hVo*i6G PJkLbS(ZqVVxL@IK|}$m4LU.@*@ U<>ERR}LL5' );
define( 'LOGGED_IN_KEY',     '2SUOoh60W%P}zMy^)lnW0&=sSQlXv!KBL+-z-r]!sam9;yS8$A#6O{4j2yH],?j=' );
define( 'NONCE_KEY',         '`]2qYN|[o2>y*U5_+}=5vxe|l]8;nVlHvK`wjC<Y{X[4RKWLx4{Xn|P6[OzKA%;O' );
define( 'AUTH_SALT',         'Gf$1$%muS%<O?)~QH^)df#,Tg~ 3P8u[O#?7EYoC31:(9G5G=.XGui=^=DO<X~SC' );
define( 'SECURE_AUTH_SALT',  'Pm~s3wbp0.fY+%w@5*w}HJ7uOfQ6Noiur&n[Xz*OD$$Cd$sH*R(ba0YLGfS7co0s' );
define( 'LOGGED_IN_SALT',    'mnDA?y!(-1cf&`8bv._{6I8)%VY[-yzRopTn+|v)+;>l>|2fH?h2KyGR4:tNSm>t' );
define( 'NONCE_SALT',        '9Y^d~vqG<[$A<j]<qYme/C3%bYflD]afZwZ_y=h=;~@t8%%cfx*J7$u^x3jM}6ka' );
define( 'WP_CACHE_KEY_SALT', '8FV.&bGDnM3vPcW=9jscdQ]aq[Z$7f7J6[.GA@cga/}BI#y*uo4hUI D`6A)pU2E' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
