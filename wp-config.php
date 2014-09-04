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
define('DB_NAME', 'littlebigagency');

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
define('AUTH_KEY',         'ft(l({rXdL_Tqdi9nGf7Zz_pF2}18o^C+$pBZ^~q=M{n8T!nu[l/m%^7Std^R`62');
define('SECURE_AUTH_KEY',  'OcGfdrq+R|C$Xq^3Tz6/)8{ G%eyjGI|_FNDxm+{SF-<nI.eC6^BU=P/W)2$b(L!');
define('LOGGED_IN_KEY',    'i4xBKKdL %5-*-.^(w$Be5&6D-ciI0{RzQ9#m/g9u~Otc{Po2e7-{.}KXfY@&S@V');
define('NONCE_KEY',        'Hi?~ArH(^*Q8t*!CkE:j,9NztY4<<(1JJF>L,g)k X!w9+7u[)c{6@r[EX)l:B5`');
define('AUTH_SALT',        '[UT?KTm,JKUvR6>Y)M~YJ*e@`@[^-PHC}rFWY1N6y<`DJM_aKcw)6yV;CB]!Dp5*');
define('SECURE_AUTH_SALT', 'gDgg*aH-OEKgbr1=X73V=-[O;4Qyo5.A/|9dq<.;ZM/EMS/1]b4XXlM6#kcvhNWc');
define('LOGGED_IN_SALT',   '/KBp-St$O&EH6V(i%64P:Q2fqIA94^T=62hIF[HSuTvIN$U>I7G(0TI:n PUe)`6');
define('NONCE_SALT',       'L1RN1Wns]w)pUi=KN(O>%u7o0I%wq=h*{Na=WHqG3d=,,<n9,{yD**o:Y(s2o74)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
