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
define( 'DB_NAME', 'wp_wccourse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mudasser' );

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
define( 'AUTH_KEY',         'fV=BxR8M:vvFSP<V ?Xu9}4+M4{mI#qVZ(@]I/-(wM10o6K]TZ]huJA(?:)A4+H0' );
define( 'SECURE_AUTH_KEY',  '?,X[^em]1fFE`8t0j>Z|[a]O>RsSB6ChS[+:JDXvtEzDu(pEpb}i2)&(0X`S/z8#' );
define( 'LOGGED_IN_KEY',    'jq8O6kEqoR|/a0=#Ztoc(nMzwBmjlAVJN4]s8!cl_gXGs} cn1rh2h77F2b:zlZW' );
define( 'NONCE_KEY',        'vQ}]Szlq9JB//OlocGqog 9A[[B<:atDj=Ys=5s4+Yrt#(GadE]V`gsLAus?+bze' );
define( 'AUTH_SALT',        '-6Wu]NJ1G-v?al|gss.bJDETs9~M1o*zo.j$D9hfORQXw1U2)e@~-N]=2op/Ynke' );
define( 'SECURE_AUTH_SALT', '/`=sf4V$ZYD|@4LQ.On;Nx2,VNS>ORo(0k:/|[bPJ@/#NhVEh7N5Th!A=7R&g}DB' );
define( 'LOGGED_IN_SALT',   ']_Em#/ks;</Li~1Ag]?::DN+8$:=N5&qF=9I@xT.UOiw/2,6 =gUdF*k)6I:`PU ' );
define( 'NONCE_SALT',       '%v5c]f^k&(-CsZg,(#/l*5n^0q|Vo++4~7!aa[%1^V<>+^-{nC[T5(~!Ek4&Ms|7' );

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
