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
define( 'DB_NAME', 'cloud_db' );

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
define( 'AUTH_KEY',         '[E@EJ38xk/AOzN(%?lJD0%XS^py$QMb$L68eB6hPm}r.~~x8E~X(tvU~dO)OEvPy' );
define( 'SECURE_AUTH_KEY',  'D6R<g* |+Oz,:/s,o:)YH40i_UC6,LsN9y>:U,V*L0*=~:$}l?BVAzIHD_0?d%|r' );
define( 'LOGGED_IN_KEY',    '1%paaswr|t7w2]3sJqwqOD/f:;:yuul<t371mG &vQJPhtrJoe~|TW.z.Hs*|LUL' );
define( 'NONCE_KEY',        'IN{]G$H-^i9kK24!xG4G$CXP>By){A%n!pQ E!N[b4j0Z[sDAda?va|[T},sB>xr' );
define( 'AUTH_SALT',        ';a}tbk.tx{$Ae0IC&wWy,H.7D(M=rpn#_]=;G;w-$q.OQC#?i.$2J3z9Og=W>>`|' );
define( 'SECURE_AUTH_SALT', '9o1vzDN6X-vkcL)mC}z6nyhF8njE0)r!aLe!p<Dn:#v<O!vN;PD!.Q*/vw1$}?=&' );
define( 'LOGGED_IN_SALT',   'emlYA%KCU9QSH?fhHqmFXwz8;A>_dju(l(aNJs`Hz@x5S3<dmx{.2O.jU`T(6Wae' );
define( 'NONCE_SALT',       'O%rn$g{;WJ88:*t:)_-?e&JPU+$i]K=QNej&_A*111Z?~-5dD>i,d%3G<M/02Q;2' );

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
