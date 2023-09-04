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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3&?:#M*NYgFMEGN2PCOU|nwe,6z4eROWz^@M!r8TKt5Rik*ROhi1KF/9YGt&$f9b' );
define( 'SECURE_AUTH_KEY',  '^EEJ7+idEYIg)SLgd7{j)18#XK/9:C~^R.gbcWL/~]W$;P4-a ~T>}! U9f?Bot5' );
define( 'LOGGED_IN_KEY',    '*s?{P5=c${Kh#)@zwZa-|B;gqFnYv=`;AOq#5I[_%@[S#Fmr>-sLRJn;d#++-nT$' );
define( 'NONCE_KEY',        'uqx(m<Pp(b]!baprk# P+zAmD7|6T%1+_k-x<Kg_Y.Y|5gPqO/vVn0l(sg=;T)Yi' );
define( 'AUTH_SALT',        'UdEQ`oT/f<iOh_8vd2x|gyH K9W4gQ`~$Gr&!TX){s[H0Q7`ZsyE<+C7r*{)|YiY' );
define( 'SECURE_AUTH_SALT', ':hZh7AjAS4Dw#a=2bH(&UrB}M]JY6BcN9Caz_|&/3letAL$S,:9kYwM@)_u)!=lX' );
define( 'LOGGED_IN_SALT',   '71n0|UwzGWI&fW$<yL/qq,J^VIP=28PL@W:/~+=;JxGmO#3W^m(cQ f`zg!zjbnE' );
define( 'NONCE_SALT',       '@^jS|yNf=|5d4+LkYL34O9P G3HMfA>OO i/FOI C(e0Q,jZp:r~R{tlVq8p!~N:' );

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
