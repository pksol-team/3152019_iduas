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
define( 'DB_NAME', 'saudi' );

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
define( 'AUTH_KEY',         'ZthmBd&#1WM.t$l:R/H/c*{9-/]S{QgbO<yKaLH|~ANWju15J4-$AKro$OL/awVk' );
define( 'SECURE_AUTH_KEY',  '8}H)-R775DdPfin5B=Lp>Oc#GS(1VfcPSbV8PD=T<k$=IF4/Caq-VW@K||vD@an;' );
define( 'LOGGED_IN_KEY',    '0UN2tIYpi]+Y!0ta~$4L U9h@$x_@`vnAc lM&B*rIAA:PiD5sr6/7fC:~yPs?$(' );
define( 'NONCE_KEY',        ',gk}z2XO)@Fz7]7N[4!AzYGTL4h?aH0qTS)-V$EN*(Py{`Pd/p(:By8)P#+c$9 A' );
define( 'AUTH_SALT',        '<+jw)Z@)Wl:k%k9tvM^MO;OqpC*c@~qGIpRrp 3fS#r]Kfg+~8d>_Ss*_n~djsuj' );
define( 'SECURE_AUTH_SALT', 'f$bReVT{8jq$fVVxJeiLGFeu|  7P%i2sfn^k]ShYz[Dm9zJW?ME8Zi*):+}011&' );
define( 'LOGGED_IN_SALT',   'os%!r4U)I:/ Q]+=zsd>_?|1RDq]F%KKvE-`HOlE:FO]cgZF~B?YH@/.6&)n->[p' );
define( 'NONCE_SALT',       '-BTF<o&EU6qe.Evx$1(8!6ZM/r@R$gU3L3geMJ/~*eL5wV%*zw3)O.(!e{fs#/yA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bi_';

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
