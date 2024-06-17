<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u700863887_Gd0xW' );

/** Database username */
define( 'DB_USER', 'u700863887_LslZo' );

/** Database password */
define( 'DB_PASSWORD', 'kk763dCmOh' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '}h#=DIK=K-jE-oX)@&tmhdc0^tebEV>;k[g(w OQhF}(0[$iOoJK230Pi:x:k)V]' );
define( 'SECURE_AUTH_KEY',   '#.}-m^ukegwye5w.b.-q=%YSzkMt@9{,E1H;bycXHSmZ|@cL`RA83oH6Qzelw*Qj' );
define( 'LOGGED_IN_KEY',     '.2?tkDC|rM0].;#3m`#(s`VNY)W,+I#yP$&80RpgtKG56yTc?+_UUUAwSK0 khuG' );
define( 'NONCE_KEY',         'Y^/{^yp9s6aQ:Oq{+]~p[eX;-!#>C4Y%N/90x/|8X2u~b~$vtr}Rc ;`Eh7fK@O<' );
define( 'AUTH_SALT',         'c.Q5XT!mbYnah0NI}#Ml!Z-D0ych1jI)z$g<~/84%fB&#O7m^|TmeHc~hg{|!-Qa' );
define( 'SECURE_AUTH_SALT',  'm)uRFL+ivx3zY,X$=)fRZS8!/]swgwSy[L)q@]0*,5PH|/6xvk-VyYFhZOHREaPj' );
define( 'LOGGED_IN_SALT',    'Da~8SieQTH7rZ[yDLG6qhQc3~m IyAB{NbJ?ur<q=)>|!kr+d!ua/@8fc)mFy;ay' );
define( 'NONCE_SALT',        'VZxXF}g&@<}Dr]D`&*y _2BKbNu4)FLYX2<oy*UAFxXrVJPQnoFy(0~(AgMGi?I^' );
define( 'WP_CACHE_KEY_SALT', '[y6S5<Ybn+cJwq%W7X%7SF}f**Af*>4a,#d~Y,IPNo[t5&c^K%$}y!vb%Bvxv:,+' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
