<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'V,! _#6^eP}OyFQE,f1VaOB/!qfw$+b!E><`<g9N8W#v_(N@791s2-wfAhSQLPol');
define('SECURE_AUTH_KEY',  '?s^MmP|j/wCEmcgy@x#J`Q|q`Asqc |-3X~:MH #|SW:K2e`KHxaU>~.vy%VeEGA');
define('LOGGED_IN_KEY',    ':qDX |Lnli>3N&?1 jB8V&~>m4xI3{WOkl@w^|{t>m~?{X1)7!)9uSfgtS8H;$1P');
define('NONCE_KEY',        ' 2 zrV+^x[;JH`.Y=2yu>eG91rS(j$z8LUNOO^Lg$yyD|4j$# k7*fP-$t_xbuU6');
define('AUTH_SALT',        'ztITm(i_HZy/|JpE+| IbMsdnO_8qN-3#`5e$SpfNc(#uG*$@u3[H=Z#fS:wlnzU');
define('SECURE_AUTH_SALT', '*x0p4.uo`/(6K$9rh19aW^<O}*gZTV`al%ip~V%|DX*oG?fxWog14^taw40fbNFq');
define('LOGGED_IN_SALT',   'U#yV=5h-,uC< #AXnS~T6V;G/%N+@FbFL:(+dw;]6>+0DNm# u`|!<(Poo!8jQPU');
define('NONCE_SALT',       'QG{GV-A8?^&Q+7dnFA{Use[g:D*6-[K]S2)xA)^>!ztGL%tpk$jHL|&:o+ArYmb.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
