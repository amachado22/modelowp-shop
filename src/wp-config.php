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
define( 'DB_NAME', 'app' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mypassword' );

/** MySQL hostname */
define( 'DB_HOST', 'modelobasic_db' );

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
define( 'AUTH_KEY',         'S]cjHg5EQ:-*HUH)l)|wpz</8,=$Yc-d)g*1DN=4!5zD|Xn]UT^q)s-{t@lnBbM2' );
define( 'SECURE_AUTH_KEY',  '1Lq62i1lU_0.Gs|0mIRTyn1/ERxSG*]PCN=d>&,cy$c8.]!1^WN&ULf~R:bX40`R' );
define( 'LOGGED_IN_KEY',    'W*-m0Nd-QtNveOVDit.%B]<.f=%s3ac6azkMv&U@cUy9aFt%-xa8;:03bBr+Tamr' );
define( 'NONCE_KEY',        '42 .iE[sSrIh/Wx8hqP#Zqjv>s=P7 fad}[*goLzL>`e,?5dgd?HoK;XPH>d!|VD' );
define( 'AUTH_SALT',        'pQ^xB^Ts?_~hXxn,Jh,t_V w`!9F^FrZt~{UX/Co^G4fAw]NhtLNP;&>{Sdy:[6V' );
define( 'SECURE_AUTH_SALT', 'n,L{c%Qs)gf!18*jkKLcqY+8)q8a{|2eDm|{VM7Y]{y/~~*W!HsvVsh-udcXx.L;' );
define( 'LOGGED_IN_SALT',   'IZvtU]gL<1&>#l ^_##o/8fFD{YwZVIM3M4sKbm15m}w$,Ue SXfJK&~TUX AL&C' );
define( 'NONCE_SALT',       '^InyH3XE{Eqq>-V=E=nB,NT}]CB$^Sx:Bdd@C{suRAIjVN~8Whc2sh;UL/:Tn]/^' );

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

/** Enables page caching for Cache Enabler. */
if ( ! defined( 'WP_CACHE' ) ) {
	define( 'WP_CACHE', true );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
