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
define( 'DB_NAME', 'alliance-konnect' );

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
define( 'AUTH_KEY',         '#k!;x`6(J?!Gef(KXDsLYHN9oG/Ez_=>_b`rJDbeP@sPu0wqxgKzSom1(Y+daw9/' );
define( 'SECURE_AUTH_KEY',  '^EvFBS6E{Rh$Ds`]<wG,IB|*U#pP[3Ag-#R{qi}j{GGgfId+-~MN%!9x;RK1j%p^' );
define( 'LOGGED_IN_KEY',    ';{2Sx]<F%F}]v|/{D[5EEhOW3z5e3sfquf>8@2Rr.v#xfg{OELK0RSac[*:n>N(C' );
define( 'NONCE_KEY',        'EI?* @ccYebOs*_q=`ZzGRu#r6M:1[T@4iG/NzA@[dm]d5|$F}:m?(Jvzek6%?#7' );
define( 'AUTH_SALT',        ' |UjnMhX5|&M+[lh&5b/%;% bBS;^Ht1DbK3jy`!EX>0geY J8ex5DI4M7fwvJp(' );
define( 'SECURE_AUTH_SALT', 'vYJ5:?%RH9{<Iop5N4%v=IYey-y?fd=x/D 0+W;h8ts_8~~x7~q^~x$vV}EWP^L8' );
define( 'LOGGED_IN_SALT',   'xsC;]|l{|)gXeZ$[Q/.lA!jc&SQ5nL{I6c]^s.Vt.Oj?7<KDH:~:}e>!q;6T%S*|' );
define( 'NONCE_SALT',       'D7.`=r]oTx-VjVxn?Bl EIbr5Hk?j?xHTx]PN6* nQH6>G2pj?/VNn7}SF#DXnYJ' );

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
