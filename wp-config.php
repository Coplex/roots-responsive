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
define('DB_NAME', 'pantheon-test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'g0p=6&xrFW!rTkcO.putdrr>r4/Do:zmX.;NRy]`OX_.a/u:P#f<p.,0Tf{2iziX');
define('SECURE_AUTH_KEY',  'CHj4aRCaz@1$Kfz&Qi||.rkaYex,`G*&)sz3PRhAm`FH!RSn7)v:.&IZrbzP!b^N');
define('LOGGED_IN_KEY',    ';q}XnQRfTuN|E3bx}6-b&G:Hz~L~V~u1ix|Q$z}Ig%gP[*,[`^K3tJ?zYR<prywh');
define('NONCE_KEY',        '!;Re/S+q[<hKn9v*>f+q8eyU]|~@buTbOlVZpJ6R+beT;!B@ -ymi5|AM}.G~],,');
define('AUTH_SALT',        'Y82s]Bb%4-^0+MOH*wW~HfPRU?GMVeOi(/pxim-o}MQh-GJ(BAQTycB@ixG+M5+5');
define('SECURE_AUTH_SALT', 'sj;..kRGBm:cks^1F+cm9WkT~P(l<{K70b/hqY}J(t-r+U[$a,RkL{~+28jqxx$7');
define('LOGGED_IN_SALT',   'xEOCa7-{X_(%7n}tE&-rNven<DA*46JPZhbaM:d5_wGSAnw4Ln(MJH>5g{}j|uPX');
define('NONCE_SALT',       'gw.;2R81+ui.sD>#ZyroS2X{O{u`3LIwL*38TBaKF$;Rm?|m@`$Z?_Lv-0N ehm5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to Canadian English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * en_CA.mo to wp-content/languages and set WPLANG to 'en_CA' to enable Canadian
 * English language support.
 */
define('WPLANG', 'en_CA');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
