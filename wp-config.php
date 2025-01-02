<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$;N:#1m>9c:%|s(#5.iw23pTN+RS4-X|Ly2YpwId,VOq,S7H]#evHv%O,jNJ<whx' );
define( 'SECURE_AUTH_KEY',   '`IVPNGulL:2}&ptK,U$BT?hW3LP#^X>Vw;MtagCk,nV)yu!#?>z4(OL-s8*,UVuC' );
define( 'LOGGED_IN_KEY',     'qaP6OZ=[P7U.],1cYtQ2S0-jirdb):Uini~V7@hF r@w&{Wt8q1+)N^I,ii$S+f ' );
define( 'NONCE_KEY',         'JltXV:;tVn[J??7<Fm*2meZ6W0Wcls@`(_w-h=t7;jT[c7Sf3!(Il9$+bDFa`yd/' );
define( 'AUTH_SALT',         'D4,4)?mgX]b&^95eE&fFL$DaxV!*;c(d6_[@0/[5)P6EMm@oiD8|n}sKrsb*ISFF' );
define( 'SECURE_AUTH_SALT',  '*fCf{%!@Evn+zNYR;4p-!Tu_E`0.~rS%UV`;EQ+jm`s+=WEue_nZQh32u.4e2SVW' );
define( 'LOGGED_IN_SALT',    'OYWUsGdhX1s&WS-.^!b(P`xcHl,csBZ]V6FTuIBGdoE)TE1f;7XlK;ae3{`Waqys' );
define( 'NONCE_SALT',        'n#%[w_1-,{= dl x(^(COuy>Wr#4n1;~ve&/`eAsSC(m-p$sGor6$yjeIc(/zpo1' );
define( 'WP_CACHE_KEY_SALT', '[lU<gyoCCZdD;D]lh.v6GEf}SXbAL}AmR`igdmX%zupE(87]P)O8.+(hvYr?x/NI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
