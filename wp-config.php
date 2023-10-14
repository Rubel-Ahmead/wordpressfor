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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         ',P7}ybKn0edab0=iV81;JBl@7g,3_hwT-3x[$,vTrGaA8=j#<`q7fIKv%CXk-z3}' );
define( 'SECURE_AUTH_KEY',  ' #:S?gLUX/dY~PlX1;8)IRv;NP}~5@4xU+J^M~1DN_RR`8CIrlbzwuDy+sBz9mtu' );
define( 'LOGGED_IN_KEY',    'phc,?y%08bYxpstAe1M48Lf -71@RIr?$71`/s6pb1OmkM-A{wC{rtSZyNrZqY7=' );
define( 'NONCE_KEY',        'H)$CGi5{Vl%X#:,#bBKIaP}Z|+~]#qm@XC<lKD6WN2+jL+Va@*uga7_MT B}wYqC' );
define( 'AUTH_SALT',        '`F7p3CXUL#6_nQEPdD6^nQ/{#9!Tv-grkEZ.nCB:2fP5]nR9o?Atrt2;i]c`APg&' );
define( 'SECURE_AUTH_SALT', '<1+2%=Y2~GyMVlpnDW}q9|+IDH>5+C7QO6A;>X-%oGq]+bS3V!Vz$ -gx*p$0fK+' );
define( 'LOGGED_IN_SALT',   'le<Q7:qc!}~}h43`~{7tXWdE#(8~TrS_F`P(ntdJI:w+N!rWO*:LWwsJB,:-wQhG' );
define( 'NONCE_SALT',       '0+*6r2D71|(:?}C)&p9U>fat<w&r$&KA*EUI,,GXR%o6^dE_C6fQeEr6<q?_%Yls' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
