<?php
define('WP_CACHE', true); // Web Cache
/**
 * Nicolas (Mr. Psychopath) configuration for WordPress
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 * * Cookies Settings (perfect for SSO in multi-sites)
 * * Memory Limit (Perfect for linux host)
 * * Developer Settings (Only for WordPress Specialists)
 * * Error Logs (without error warnings in the frondend)
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'име' );
/** MySQL database username */
define( 'DB_USER', 'потребител' );
/** MySQL database password */
define( 'DB_PASSWORD', 'парола' );
/** MySQL hostname */
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
define( 'AUTH_KEY',         'Z(o>u9v0u>vEu{cOy^K8(;H~3kumIz1O5+EM|_O>u9k_]; H-c%a0:+y0BU?m)h#' );
define( 'SECURE_AUTH_KEY',  '#& `hLhA-Fzv}]JlFJ{8r:Z oWo]RKF4D^h{HPKa 2pUbb<,PHBc2N4W66`]>ZJ5' );
define( 'LOGGED_IN_KEY',    '[($SXg=f,js@+&0SU55({~#GkS!}:}^y1N6bZy9{M^VW%[yJi;4%hvX=9&SUQ@y ' );
define( 'NONCE_KEY',        'wSxjOo2hjJhjrlH7dnO!q,cu!eAOA&{F~g_n(:m;b}[H<Xlk8?^t.r#WsTm-N3[U' );
define( 'AUTH_SALT',        'KcldCs{4!$OQ*Oi({)j|3hK~}v8Zp#Zv!ocKl#cGi!ap5ZzX6r!HjhPkD.BK~Z@u' );
define( 'SECURE_AUTH_SALT', '?QK%`li^spD)kVNI}6-r}&6niG.Qei<52MR5^N$Ab6E!Rqe[(:jFwErP9R +C;^v' );
define( 'LOGGED_IN_SALT',   '(evQ[;3lNT7JT-_@hlc[hr)h;FwbYoaj(M+} ,VcbS_}_=/Zei)*T<wH#AzSfzl}' );
define( 'NONCE_SALT',       'b}ift-OM*.iQv,?PU*/e+OD]pqhSV|<X.plI1dp~U,19MY_i<+KasRklEW b`^ZP' );
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
/**Enable Cookies*/
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );
/** Memory Limit */
define( 'WP_MEMORY_LIMIT', '256M' );
/* developers */ 
define( 'WP_ALLOW_REPAIR', false );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
/** Fatal Error */
define('WP_DISABLE_FATAL_ERROR_HANDLER', false);
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
