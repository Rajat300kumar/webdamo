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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'L)A%{)R@5yfQfUF&[TC}_BUh!~F,(b4^?72n*NJhCxVQy*toHQ#y;ir@NY840/>/' );
define( 'SECURE_AUTH_KEY',  '~7nQ/SFEu1z%4h)J$EKrh1@z0sq_[7|,27SR[N_L.j}*JvVC@,oBv~I6a_rcp_ng' );
define( 'LOGGED_IN_KEY',    'N!LRSDpo[;u84P7WNeEb6khFW*<!E*QGZjU.)+[G[Z/X1[horjnpHG*ww8V=*{)_' );
define( 'NONCE_KEY',        '6`LA]JGhXGvCr]1d{(W^H`$2$+ULVUD`Cn^@0ADwJ}i5!BCyj!S2/bbMB5&U%1u^' );
define( 'AUTH_SALT',        '-3eQv0slosWWN%93QvtOC?_T?K;ON{_#&/l.VdW|:az@4rD,,/@Z)S5p]X4sd&`9' );
define( 'SECURE_AUTH_SALT', 'WB_{5vpy%9fnb;m?`o9WBY3Cl9h5y+Yqya1G&FSKs5lKfiX~k7o)a/5_qF?xK5_}' );
define( 'LOGGED_IN_SALT',   'tt-VNMKiVl&U3P:9St5{ZE?L[1[u_cn@Nk;R@f0pYUxp*Jp+/W*f,3M$A.k deHI' );
define( 'NONCE_SALT',       'edtoF[k?QirjV@1t=RrU[tud!:FsR(t/n@bk=PD)vw[)?wG>?iw4@+q]>wbYF*v2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Rp_';

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
