<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mycources' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'gCE{FVqAe1>M^Ye{g@4WTNbB1Q,Z4v/= _+GkHD^Hm(Ygr>2p>/(*ECg#pOnU-<-' );
define( 'SECURE_AUTH_KEY',  'L[k/#bG9*r!*A6y,qCShNrx&IO]T@$xbpj,!}>dw3eI{CN:uy8}!4#dv5osaiB&,' );
define( 'LOGGED_IN_KEY',    '_Mqm7[Zm2GjSt.NJ6rDBJsml_F=nD>>NxvDH68iBZUS%g-AS R2ONvDC*1H#xh`V' );
define( 'NONCE_KEY',        '^wq3 !T`hnyER,3f]spuCF)5~=_6LNo#p<p>Q^%$7[kl(yL8fH% ROC@D}V!C,|r' );
define( 'AUTH_SALT',        'kwy5Vh#5,WfFnd_tQQl%5]/CvVH2SZ:RL%=%!mkVi_LFF*6]/!I.%8 ?6k>%=O[~' );
define( 'SECURE_AUTH_SALT', '$k0g5U2VB5;rY(]6gms{NZZSN&*/MS>$W/F-c$ES6}P0N;B>{|N_{3I$kC]+B>t3' );
define( 'LOGGED_IN_SALT',   'Y[OFjX~km<72]Ko&4HP^}MTEcK) ^^9WSw4mOx/_&^rz~M+$qb,OdHQmP&9a#xu3' );
define( 'NONCE_SALT',       ' [_ID<X~0feOe+/|!/wAbZ{*~%jr.;B]9pN&^ %k7 yhz)}oge&DUi3~=SrSOlqt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
