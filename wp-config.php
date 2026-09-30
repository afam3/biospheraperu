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
define( 'DB_NAME', 'grupalm_biospheraperu' );

/** Database username */
define( 'DB_USER', 'grupalm_userdb' );

/** Database password */
define( 'DB_PASSWORD', 'Gp-Hs-2026#.' );

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
define( 'AUTH_KEY',         'kC/fzvPtcZKEl m5Dq+Bttgs1#.z=OZno,JCK!/}=#MC5$SzyNV#e~{ g>B6:ajx' );
define( 'SECURE_AUTH_KEY',  'T31ynKBa[cN{[9HQFu<~GaqUlZ@~C9raj]>p;y!SF0sbm@R^|9olfxeZuaiKpujR' );
define( 'LOGGED_IN_KEY',    'rssp3@Ie/8R=V|&Q&TRLBF 0B`YZTap<mRS=i}D.>xO9cacC8in6o(bhzi9%z6L8' );
define( 'NONCE_KEY',        ';q-v/xu|Mp6}*).#Lsol23+lcwG%P#a?zt.p-_:UJf^K8?C?Lgjd+`ZE*ZCx-F@O' );
define( 'AUTH_SALT',        '(S7F/730cI40#jP<:lOOU/T>#T!%OB(o/h}9z7lw6l_<`9{mxct2_GtH96yUIw3e' );
define( 'SECURE_AUTH_SALT', ';92|r-2Rk|]q~V+/,Sl[<yEiavEEl7z)4U^8e TXK>#;iOg$q:i1FA~)XUYdbZ=K' );
define( 'LOGGED_IN_SALT',   'RJL7?bLQSOtVHsU!d[5:q4hH!cp-^?xSA[2-<=F?cKWZ3nv$96[.@mn&%#U?_kdC' );
define( 'NONCE_SALT',       'Wc%D8l.AXPrPKbNm7h;9MAq?bi?e#] a=T;uE@A;~tV4S1;6(R[i6Y|sr>>d9=(|' );

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
$table_prefix = 'bp_';

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
