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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'R<>IngVa6I,a[YTYkFE@paTer7-*q.bc(U&VWI:.v=A&uj8V`~uf^06:c:b;,vWo' );
define( 'SECURE_AUTH_KEY',   '8JDvVE*cIQuQ@%#R*Qw-DZ`~VX#<DZmN7:s^&@</YFDe2&=mwIr*C]Asw7PG:Tfx' );
define( 'LOGGED_IN_KEY',     '`ut@<CiRe;X+EA[AQ.V:CB*=W{:iVaZnPb5|5q`C9hh6~rpuv8QpJN#}}dIkP$db' );
define( 'NONCE_KEY',         ']@vW%K&j<S4!oQO8azhDxftmI}el#}_,kptHX)%.h;SSx=$fhZ!msGqD2 `R;;kw' );
define( 'AUTH_SALT',         'vyiB(JJ{`T2ttMN)EVhiU8x@sBlA0Fds09@a?2cA%VM&9ajna^My0,V^@-1SRB+~' );
define( 'SECURE_AUTH_SALT',  '[1Q/5Gu?$;jb$V`$47Jzx$e>#>0M;@/c`[62KW(KCM~9_e(*>X|&mqE~Qc.m!XqR' );
define( 'LOGGED_IN_SALT',    '7vkC(9!8%0~QNi_G,nGzZ*HSkv~:KpCD%,YED)g<@P5jiDr#[g5}a)]R1b<3K7mf' );
define( 'NONCE_SALT',        'c1z=Y_ia{8BIBv8hyGi`r_1($sFS1v4?0ZXK2DBS#jC)w8D{HdF$y`Ix>!3j*fki' );
define( 'WP_CACHE_KEY_SALT', '1HJggF*vLL;=[Z2ziMF&m3QuN@?PVVUAl57;,v%5QdQ7egI;6a*SPKZURyRbK;1J' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
