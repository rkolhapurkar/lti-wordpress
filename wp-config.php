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
define( 'DB_NAME', 'lti_database' );

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
define( 'AUTH_KEY',         'jq,kGs{!?[W|8<ZUk5)pQAF8WA3 r756%uME)<{Qco~ooa|KZ$DO|%0@:eIXtxmg' );
define( 'SECURE_AUTH_KEY',  'QCq=xEa-O2;P=`i`DELxeHc7[.4^!?p`g~hYL;^]Ha67@3v09;_/]YJDFukH )B.' );
define( 'LOGGED_IN_KEY',    '.IUvsqqtZ!A)mF Qah<2UXGd4f[eU3@S;FY}l=jUI4o?RC++=iM#knNbHwhCafRH' );
define( 'NONCE_KEY',        'R-<lMGF`ME0<Z!(8_}|]<&q]$ @IAWz>44=NhE1))amx&qszL@F*9g@GodZ Lat`' );
define( 'AUTH_SALT',        'Dh^Vonq_+y:ibf!/yjk`~5RQ4d:E)Q(tt~;@[9;G>xwS ;j |j)%R=[uCX}9Dc#,' );
define( 'SECURE_AUTH_SALT', 'MD;:ksZ8N*[B?2onUcC2*q)@-=<2(#!_]f>{~DNq%<BHG^1X49Vk>)N&FT(%e*ti' );
define( 'LOGGED_IN_SALT',   '34;z25~5)l#Lu>Cuq*HLs>847pqno)f&JC# hoG.9g^,TB0r;2Mn%H2Xq<AqZqXx' );
define( 'NONCE_SALT',       'BJq$qR9n[nrLgSi}-h^dBO&:AW4CWgt[n%3D|^u:m0qPJFe6U.G[)FS$6ND%~oc6' );

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
