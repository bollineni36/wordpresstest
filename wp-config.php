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
define( 'DB_NAME', 'wptest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'wn)_XdZw?Zw6z[pSNd>8<J!<M+tr(7vH31Y{l3P/,$/I)ZN;@7+0;K<W|G.^7]OC' );
define( 'SECURE_AUTH_KEY',  '&;ycnW `Qad?##ZM]w90]bL?j>I(LM%{fAe1N-?Bi;FmYj3{OXGfW_@O)8Pl<qRV' );
define( 'LOGGED_IN_KEY',    ',CFS8N#Xa+w!y%*jr74#bHbZqIKObo~D{9V9RRVkAo0M>Az&FGk/9h-rmx6>E*$]' );
define( 'NONCE_KEY',        '@+;=YW;DNC^]6*ye=dS+WF%z+uSLn@8J-!keQ7u!_{^J2~!Tr728DBXWEprnPnXh' );
define( 'AUTH_SALT',        'aV04,V7n&)Jm2-h nV]Ztt)e||_23{5Xn(mEwhCT/#sJ~+RH2PYKp*^Qs-<*t`;{' );
define( 'SECURE_AUTH_SALT', 'q{<,9!6{ =a*v*T)(Ye[B6OU:-!c`? $l JkU^.+ W5;D>fqB%^i=bc9(Y<a$OCI' );
define( 'LOGGED_IN_SALT',   'W){dSx_WNEkod#Hf6r]98H!Nei@@oT*buu.~rwAp`pUL]jDY(Zh<]S,.f`Y3IyeG' );
define( 'NONCE_SALT',       '!:wHL<lKP:po?UEOQ7Ji`o ^TCV^k$)v%b}b kcCo5<KSo$%h)xZp%XduWk:W[pi' );

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
