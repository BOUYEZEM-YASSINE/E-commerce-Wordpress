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
define( 'DB_NAME', 'ecommerce_wp' );

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
define( 'AUTH_KEY',         ')t1BhI*3[8TAQ=95;@M%iPRFh>*=zju3m7t&yI.(x#<B`V6/vFy=c;I$Fr%D&8(d' );
define( 'SECURE_AUTH_KEY',  'o[*Bdq7f*@> @FKd,/,5RuEc/&/pY[+]MlZ|e{lm}svqiY$RL2 *k]@~+{dmO El' );
define( 'LOGGED_IN_KEY',    'Hs9:n*`LH7[nFX[ kPQ.Lp=m9[:G?]*=<;>>IyqD- VM#g;VPLdWBu;wM!{N@ &M' );
define( 'NONCE_KEY',        'Bnjuu3.t8dYa!chia`uY:7vqN*S<#>^4g[S`D4aa2rDbi{dlGG,O<Lj`mb!h`F_h' );
define( 'AUTH_SALT',        '!>v0(VncBreQSLxZ@]Xfdohk~IHF2!t5`N9fZ*cwMc[G9xc?4E}s`SUDZi[u?[hj' );
define( 'SECURE_AUTH_SALT', 'FPZ0erF2cKe_.8 =S>Py@3X_OU`k<PSF>x4ZQ/1HV$FK6D.-s[As%% oO9)qdR8l' );
define( 'LOGGED_IN_SALT',   '+nA8FsLC;[D;CR$U%oO3yvBs-;^c,lVDR=oI99DO#y9O:ANqq#I~BhvLR9&Tac1G' );
define( 'NONCE_SALT',       'V;TW>sLRHBbnw7G]<zdJ3DEEY9L2hX&AMZ&C9/{0k2avE{0#}i-F9+7)6~VUN72I' );

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
