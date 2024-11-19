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
define( 'DB_NAME', 'finance_db2' );

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
define( 'AUTH_KEY',         '~.3J4b&Z6~*?41s#2C.W1nb%:PkjO>:Hj_[h{$!:y]g4~L;i.>S{.>%1N7BunNye' );
define( 'SECURE_AUTH_KEY',  'tEaE<$1zy(G26y%p|^zCrOeyR`(^6[.Bb;n>A<T[H)pUof3mSyC_x5<N6XRicnpq' );
define( 'LOGGED_IN_KEY',    'fuVCnJ4k=Mm._Xi5W4i2;48XTP)%o3qL:cM[e:X0kP.||`@4c-j A!(0j)%h7O8i' );
define( 'NONCE_KEY',        'MkB2NHr:>[<>@}@]li<p6h3$.j.n1rv$LmAl(FWjRLygV*N1@@qG5!@U# ({#mP4' );
define( 'AUTH_SALT',        '`|xMP^Z#$g4B#B+c[6yAWooH5A9{jAi}1}GiN+=ee<i>}VdjwM}qhnH:}l1y/b)[' );
define( 'SECURE_AUTH_SALT', '8!e8b_qZB1Q|UH,Q.m]>^17Mrh6U,letM]+CAg]_<^M4hwxCqNtnP-%]w]l-.$)K' );
define( 'LOGGED_IN_SALT',   '657D*`kcG2R0APQ}UCdF]CdPcEt9Iz1HH()Q,1qVXa_GE7~?4s]p|Y=uzk5>IhBw' );
define( 'NONCE_SALT',       'Z%gL{c3adD=H!)FMerk+yH^*}Fn;|FDx*}R?3yagl[(Y&,u[5*=FcL%7u]Z!I2uE' );

/**#@-*/

/**
 * WordPress database table prefix.
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
