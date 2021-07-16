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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';@WzCMKtK[~;H2|IL}p|N|[iG,y6!vy1.ISf-~v1?b3C:n;PL|:,[:*47{*+^oOO' );
define( 'SECURE_AUTH_KEY',  'WLSYEW,[b8@5gzhXmiK)U_Ae=pDJDp<a;/xfH@.g8R|UONT Ot*[S5[O*ITY*3}u' );
define( 'LOGGED_IN_KEY',    '_EG7a2ib8e!q*gO}WQ+}A+fQKSfD$&d|ezqiz|3=R`mKeyep2}L~X@<;i-oN_yOB' );
define( 'NONCE_KEY',        '7ReFQ1S*S<uQV>&L[L5I:UQC[Tl1gy{*02=XAk={P6hFyz,i+0t1-K}!7dp^juJ?' );
define( 'AUTH_SALT',        '&,$M#%XD1tL@OD*1C<2+YgPO)Fvg4yr0e[SxW.V:j+^rLwV[SlM8Vh1nS@d`:Mr,' );
define( 'SECURE_AUTH_SALT', '_~e$Cm*>9K6.W5PTn|L/gl0uVv[NAm;pPG{u=/]1e~dpn=2Xe2yspE}TtoM@}vdm' );
define( 'LOGGED_IN_SALT',   'Xj(&QB^=FO]fN,5039t&0y)(oiiJQ6n&.)RSl}syu`,x8{V0JUS~:VyT9<c8yT],' );
define( 'NONCE_SALT',       '+JiB9NoI*Nje9=[Tbz^C>)CZuX/5= j3h5Py=(#jU~4)7B/yTFc>v/Z3>slt~L5)' );

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
