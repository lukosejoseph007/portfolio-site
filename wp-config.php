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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lukosejosephwp' );

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
define( 'AUTH_KEY',         '-V1^fR]Kz=T.9I35}y8w*6K%%9!Us9*h;/eRxc@$5*PQ-9K!8tOI7-a>fBC*3/@9' );
define( 'SECURE_AUTH_KEY',  '#F1NxICQP6eIFC<, eYC-rOfNIy3i|T1CzKWm{;,3ef#Jr)0^,5?06(GMuit0)b-' );
define( 'LOGGED_IN_KEY',    '~(*3Gdu#<B].PZ4(2H4h,OGr /JBu&q==g1W+^l?0~P<u!O<YVE!h,xRESo3?>/r' );
define( 'NONCE_KEY',        '?_`HkEc>io6L,[SUqnWu9@DE{)#$}S6aK,=)krL<BO@I59HXGKfa?Zc![a*Mms+k' );
define( 'AUTH_SALT',        'lc=Ic=}XI8S[LV%rpHsF=6K~Lpo%YB0ZTKcbJC-x9 !_WlgAm[`JArybnI#@lQ+O' );
define( 'SECURE_AUTH_SALT', 'Q~fe0p3MY2?3v|A*{AIit^;xwJe!9%dRRrl+3sB3xmOhrJLo: ?hAZm5%qc bRcD' );
define( 'LOGGED_IN_SALT',   '_Fo|bDv:jwedK2PPfOQA!oSISetK4x98qM_Ci;sG9l5a2R{v@5cmWsOYSx7!8obN' );
define( 'NONCE_SALT',       '+!g=sLC8BDR$i3S[BdrmDEvpq.c8q8<6e8DXp1^/60VI^S4qR>WXDG%j}[pjRU0d' );

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
