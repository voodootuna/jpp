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
define('DB_NAME', 'jpprods');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'killfish');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '~VsTyO+-Kgy|@&9tm,{4M5etY2y+z=~(Z`lq C5C!.>|CM:guZg1+zrP(DJ7E.F]');
define('SECURE_AUTH_KEY',  'lb=[:G}1Db#~?wv%ziF>F;$4DUh-}5PC3yIY1#C}TTl@#*N7_HJ >Frj Zb-HuG8');
define('LOGGED_IN_KEY',    '$)qT8|bm-PaADI<(}#/zu*mLqGuOZq-7;j#2F/@gnu/tONH!0w]+R;NZ:_iF`JUZ');
define('NONCE_KEY',        'Un| 7YU_Dxn0|9KcapBy0va,-#wq*!o3L:X:,|+3]_V}WA{HqRN7mj-?*~ReYwIP');
define('AUTH_SALT',        '$*~F&hV~/Q|T?jJ9FK+.iTW(gM^O(qQp6lUY:oq!>]^*B@Q|A+eg!#SlT $UlHrk');
define('SECURE_AUTH_SALT', 'N}3=RvFsTcp-ey G2y7(R 9MAka~a3}w#BLiue*XQwmZ:~ZlK~?2X51-a<<*kR(,');
define('LOGGED_IN_SALT',   ':|xmwd4:,~x1X|XKcC-)8fQBXdU(+xB|m+J6@.]wVK]=~mz1(b.YQGW43a668bo9');
define('NONCE_SALT',       'DRsoSG?` ^A KR$/M=Ukgb^,K[;+b79&@iHXKpwqYtty;o+>4BF:Fx1O70?mJC3/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
