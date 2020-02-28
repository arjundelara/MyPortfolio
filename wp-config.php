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
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpportfolio_db' );

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
define( 'AUTH_KEY',         'mPbP#`|9[>sJ+KMH)%FVmVvrh?H6v#- lx2w_!|[Un^0e~[{Sedz)3JRG#-cCxSU' );
define( 'SECURE_AUTH_KEY',  '/Gh>xSE0hF6601!`3~m(7|<5^1Po[D2x{7KBA7Ij8P^kE0C%G=eaOxn|1{wHY(~s' );
define( 'LOGGED_IN_KEY',    'DP IeBL)Zs88e|goouv=e5pBtuXlb&E&y*%Xet}6v_:!ngcj(]mT``?g{+B[Y ez' );
define( 'NONCE_KEY',        'ep3q/hEwX4vc-V=f<l.sv)3/Yx+s9m}n2omtVq%Gm57xi?Xq<B+Be&BD#PK|-;8A' );
define( 'AUTH_SALT',        'A}LWZG>3199RWay((Y4j8.k^scNu_W(S#f^L:UQu(xB%`_^UY|~m7?cU![+~/J(K' );
define( 'SECURE_AUTH_SALT', 'jGN3k6%)3rSD(av%~mA#}dHl/<EudeGZ,wK&.;wBT8Q]hv?(S!e/n[O#E#ttmQDo' );
define( 'LOGGED_IN_SALT',   '`)LpMynK]rmiGm(4>^lsenze33S_J}PHKzn^I)J+Sn8KA]NTqkj&8n/zV83$JQ-C' );
define( 'NONCE_SALT',       'Q`J{*Yht9)bQG.m9]QxF`V<N(meV!;@${nhT}d~Mu y|2?|nm=llpnIe;6u]/0jx' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
