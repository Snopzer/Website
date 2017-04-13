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
define('DB_NAME', 'website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',emuNR7YX536%%Z#0!Y:eQH%Q|}_{HYl(]h(f)DcZ86Y/}halG<h;y1%SMsr~nP.');
define('SECURE_AUTH_KEY',  '?oZ@54z9e}I58sNDxXs(L[/XP}-i$hjWmW<KfZ p:RJ3/M4{,Djb6q`~yD5p%?)-');
define('LOGGED_IN_KEY',    '7y,Q1Q&7Un1$~} rldO&PVc6nI;=z_l`**,)?RtWL**| +$bILv&la=}#{J#0).2');
define('NONCE_KEY',        '9[D(`,R,&>-KGL,?|l[Vy&QvqZMp*&N[H8?E{4W$T6}fb4#U2q4,+x|:0RcMWUCI');
define('AUTH_SALT',        'r^KoOParE{$Baxp$,23u(++xutM l.U#f7x[>Pqc2@-oH|!0zyD0oy$*c>!+flBO');
define('SECURE_AUTH_SALT', 'lLs%wS`WHOEH,d)ld,Na]z{^$ppN;nld)fwIU8.MfrKLe;#QBSD]PACIa|%vW{;]');
define('LOGGED_IN_SALT',   'IL>G$JgBzK;o:`th_%<~yv!hpK^BS]6TmKOB*k:yLx^f+l&9A!1qXm`>,L+[R}NJ');
define('NONCE_SALT',       '1^[[MHPi>lO?8#;`jCM(q(Kop^t9l<EczIFFwqCP+6m~09P^h|-%Pc!mV1`}gzkB');

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
