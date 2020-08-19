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
define( 'DB_NAME', 'stagingpDBx2mrj');

/** MySQL database username */
define( 'DB_USER', 'stagingpDBx2mrj');

/** MySQL database password */
define( 'DB_PASSWORD', '5AdjSUx5m');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'C5~|ow|:w~lpVdltWeHDL;5LS5H]2+x~5D#:w_lt_]t-eahKWemPWAHD#;EL2A.*<');
define( 'SECURE_AUTH_KEY', 'EL;]2*+.qxt<;{x*+eqmPaXt*+epmPaW9LaWiLHT62A#.]63A<.{y*$iqm^<.qyuX');
define( 'LOGGED_IN_KEY', '_htWSeHDOlhpWSZGCK1:5OKS95D[#:-_~]2;+_*ltpSeap+xamiLWT6HealOLS95D');
define( 'NONCE_KEY', 'z!kgoVRZz!@ksoVcYFNJckgJVR4FC|0}5GC|1:w!~hso~[so-dZlOKSsowdZhNVR8');
define( 'AUTH_SALT', 'M7MYB7F}3$,^>4@z!okrYgcs@zcoRNVB8FgnkNYU7J}>0JRN4B7!}>r@|![w@zd');
define( 'SECURE_AUTH_SALT', 'AHXTaHPL;A6*]HDL2;6_]#p+]#;+.*itpTeMIT63A<{y*${7^$.qmubjf+<qmybX');
define( 'LOGGED_IN_SALT', 'l-_lwsWhKGOaWeLSP2D9_;D9L;]2*#_pxt]5~#_pxtWhxt+helSaW9LHPaEAL;]2*');
define( 'NONCE_SALT', 's-dZh![|o-wZkNKRlhoVdZCOK:8HDK1:5_]#t-w#1-x~lhpWeaw_lhpWSZGOKalOK');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
?>