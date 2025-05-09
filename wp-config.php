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
define( 'DB_NAME', 'mohammed' );

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
define( 'AUTH_KEY',         '3o;~fU)aFLl1ohUj:>^1Q;XcQ1?M2KL=$]D{T9{`yamtrx18:b)2}JXFK?)?C&@2' );
define( 'SECURE_AUTH_KEY',  'CF[d]1-vJ7ag7(eF3tt}*rG/7O}h$,)]B|(lCn m,9Yf.K,s;EK#FMPsS[vkcTs0' );
define( 'LOGGED_IN_KEY',    '7aDGh$<vAu0}:%B$pu#Ih_^u;,V^a*&Ls_6fUW;8jaj|oC!o#^e:._9H`%5i]hND' );
define( 'NONCE_KEY',        '`n%WyzAL?m3$8||+h*>u[UfV6@>(1g;^h#*.|I7ac},(++_-:2!#/Ym7m$O;j+6e' );
define( 'AUTH_SALT',        '{?%1V$<^)?/X.Q0*GMW?RQ5fA3i6;,4m:A0d it3jO:j27e~(Hr0<Zg-7##$Sv@(' );
define( 'SECURE_AUTH_SALT', '2<0t2iL0gVsiY7BT,f|c9Xz[ ENl9VQMum0mQm+%]jy5!y{[AgX4uHj_[jBafcic' );
define( 'LOGGED_IN_SALT',   '#?qG?v*v$FrcVUcnm{|ltKGS ?[vcUrkq*q@aJk(fgB~*BHYf-1GgRDqs@~s;?Ni' );
define( 'NONCE_SALT',       '/9rNJ_R(sN5 f`mVuqc9X>^tV<7HvQ=fFpEE0++/*P]dh{SeC;#%[@kSh$~]rQwZ' );

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
