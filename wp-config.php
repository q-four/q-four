<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_xwktcw/q-four.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'q_four_com');

/** MySQL database username */
define('DB_USER', 'qfourcom');

/** MySQL database password */
define('DB_PASSWORD', 'sa3d*bCe');

/** MySQL hostname */
define('DB_HOST', 'mysql.q-four.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':+8PYo4?A1:W|yKU;$qTogkjgYa"ez5(T/#0`61+"j(~"P1vc+^9*U_Jy9B1WFv8');
define('SECURE_AUTH_KEY',  'Y:D"Ufv#GDZA6#On(aR&K_Pt!BcaO3%QK!RQlB:z:AeA%!HZ)lhBF?*XfU7$V8Tj');
define('LOGGED_IN_KEY',    'pp1|g9d(h/B$xsH8xdynNDjqa4s+"~b!S_f@Dn~6c!;RObk@N)9v@%fc^~?8NaW5');
define('NONCE_KEY',        '&V??DLl*rEB?M!Kv"SL3E:GQeT$y3?@_?z~e5z6?uNCb^OXDZw"6x1bb/vLFu9b/');
define('AUTH_SALT',        'N)V$eu10Rfs/`Y;owbnE%;S5HFfaIuBG!?xOHvj)yPfH+mU@*AP!;C`avSPGu_J*');
define('SECURE_AUTH_SALT', 'BoXFicZndB6C3XLXd6nolMNQMHXORV_UHQMPelMr?lG(vq8c|M)ip!*i)wI&y^vr');
define('LOGGED_IN_SALT',   'm"4zdkp1vv)?l5&FEr1P#iG@YOUR~Wiin?djAY@D$?+w+E:^CV0"cs`T(uF220I!');
define('NONCE_SALT',       '~)Mbpbj/1;DgAC+^urV78)@znd2f+P#;m!_bPRb!uD^_fY^q?6|%u&1K5ziw`TqY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_h6a8ed_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
