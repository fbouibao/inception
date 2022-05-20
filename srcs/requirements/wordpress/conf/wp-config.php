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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv(DB_NAME) );

/** MySQL database username */
define( 'DB_USER', getenv(MYSQL_USER) );

/** MySQL database password */
define( 'DB_PASSWORD', getenv(MYSQL_PASS) );

/** MySQL hostname */
define( 'DB_HOST', getenv(DB_HOST) );

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
define( 'AUTH_KEY',         'yY$JccQ9RLADI2lkOnN|xC%l;TMu)RQ6(64@[%~ ^^ _lz}!3#,4B; A<O<@cE,4' );
define( 'SECURE_AUTH_KEY',  '/?pqR%W[mS(F]`2>k1%i8ZeAl >%b0E3I3ptQleYVx6:)lQ=A)95)0d3TT%R:7>:' );
define( 'LOGGED_IN_KEY',    ',w3$jwBu*hkM<![;luYKObtSOT,J8HV}Q!7&?Z}4t{Z$g_t2H~c}z&_P<}|;1H2H' );
define( 'NONCE_KEY',        'Da0YpyHWcd_L?{re^bZQ|^.w{^c4^U++b@ccRa9Q-]^Eyxe1&E4Rp%]LG^qn[$`X' );
define( 'AUTH_SALT',        '}[GKk>MTh-?a!(oBFvmfjSWB/[BA%//b>[W}Uw!nJ</FbhBd1P^2atboA0lngq[|' );
define( 'SECURE_AUTH_SALT', ']`|ry[:66XLfgt7XSfX6!+IN=/&Tfu_OvA9L0uyk52cvpxd&aAKE!x1RC[UA,6H7' );
define( 'LOGGED_IN_SALT',   'D&/}]N I>ek3&1(cck>o^UZV#dvV!~5)B=?Bu!<~0!un?PgtPqe?F3h*0H0I<l_t' );
define( 'NONCE_SALT',       'E$G?z|(p*&QT,Sqa<c* IdnB|*)0$dc*7EaXfOO30OPnr+K~Oaz5}]8En_hu=2 !' );

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
