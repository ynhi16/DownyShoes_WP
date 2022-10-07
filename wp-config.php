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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'downyshoes' );

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
define( 'AUTH_KEY',         'oBu-3+}O.RW_)@VfgD}]7h7zq%wwvf9JgXQT(WasL/^^ B@4u~Yn~Z+FVdf,?=j;' );
define( 'SECURE_AUTH_KEY',  '^]G=aECN<8t4>^k*!u9LP-kD5x2@KMHF}xOFl%~;tQ!5nF!E` rSe9+l^O*;#{:i' );
define( 'LOGGED_IN_KEY',    'A$o=d}5/!ON`C3e=mIwT,2|O9GbQ7Bo[FN~!~Y=9/R]>8,[i[W@?Zk.>-Jq1$~cM' );
define( 'NONCE_KEY',        'U@vN?~[!W^8?0%:6zC}[`A|A#vyy+}p}@zG&fw:xkmL:`icXhMOeVDEyg1TQ_ZhC' );
define( 'AUTH_SALT',        'aR6r^N&16?!fJq%;O0@eWYM%>cNj^XFApT9nV)>GpqcwSWRSg`KLnFZ95xMu;i@3' );
define( 'SECURE_AUTH_SALT', '3;[1HeeakpPUl3Pu2H0SVHV$azx]3uDvVK-1*i^%367B)yCn`n =Ur/aH6ob1XM0' );
define( 'LOGGED_IN_SALT',   '3 UQa:#.o>XZM%Q7grPuiVzX%eocZbCVR}0 7;GCiPQZTv$CNpm@SA;,we!DX`zy' );
define( 'NONCE_SALT',       '>i>R~Q@39]^.PP5cPbdvCktrd]hSXt&ST,pS:=a&j@>&o 6wG0+s=Aba>u9N*!0g' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
