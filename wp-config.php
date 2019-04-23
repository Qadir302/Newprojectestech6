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
define( 'DB_NAME', 'erozgar6' );

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
define( 'AUTH_KEY',         'W%_E1}@!ns=ST i8m>n@a:Tzc/BR^l@LzWq`zb@bbQ27Dcf=}mT%@y1;,NJ+< MD' );
define( 'SECURE_AUTH_KEY',  'm4MoI@H+:)aHn^iC4LncY_b|sqM#pS8|[D5 yLLh:,}zI27PDa17F8Pf]VCDKSZm' );
define( 'LOGGED_IN_KEY',    'VR0++@eZyj;,v<9S4a&o5saT:,6T0fd:{8c;<_~*LGjrE9-KonrMP8=2yIQHnZeU' );
define( 'NONCE_KEY',        '(0Jm7xlE`jV]ax~T9Ke*:^NGGV.1d%AaH|en|2Qa4<p-IX</P},@`j[*x[uXx`9H' );
define( 'AUTH_SALT',        'O2ej*VByBs[@%wQF9k:`%*w-Mv~la[QEs$ W[[tSA!@B4F ;`@hGWMn>fkpaTe2N' );
define( 'SECURE_AUTH_SALT', 'g30&.ZznV>dlX+$S|4K C.[?hZ`+Zqs:5>Nz=u,<L=TCUHQtW{]H|Q>*v+tT3ibc' );
define( 'LOGGED_IN_SALT',   '{T~1LRQ_rW[Z=kWXXhEue?gR$`Pl4-BrfMXN}W[er9V:xGc05X89wQw0b`vG~CRo' );
define( 'NONCE_SALT',       'L<V>,;1j9UWZ9}|JyTN:f;7_*IxM[-*_90.i,OyxEIadCJ0>7=3)!w|LAi,M1:RP' );

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
