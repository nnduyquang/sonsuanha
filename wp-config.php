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
define('DB_NAME', 'sonsuanha');

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
define('AUTH_KEY',         'iAYYSR9&;Qw[r,8jEC$r{Q=A/z0,_!LkvY0X-)Eo}/7N&/HRHBW_qJ/ENyA75K+4');
define('SECURE_AUTH_KEY',  'iTpZ?H7f[`jASL&r7>z!BUdMZ [B 8G4xlN>RKx|@&pbRhI@cf3:` b!3d9J|nQ3');
define('LOGGED_IN_KEY',    '2guU*k7^.bCS)A&S?0HFnJNZ;X_NZCd/%+Q8m;48lUj:fBoFDNLiC;.%=sZ;i/Ui');
define('NONCE_KEY',        'nEmT!g#r}:]i_+}P5b/:RV2_MgFQc@YN^d=T{_LvYgs9.:rH/yiC0,aN8KhNjFz3');
define('AUTH_SALT',        'fh.P,$A4UXzvQYKWS1%RHIp*/8F.PN.{2EKstrj{.q,3~KCgXi^i)?YPZrAk-PZ]');
define('SECURE_AUTH_SALT', '!-,A3h,8+%O^}] e!<>ZGIXFDu7qX:RJ82lg`6]4MNdf8r7+?B[C~h`^&zEQ`g]?');
define('LOGGED_IN_SALT',   'w9aZb|sqJ^Jk,6Qcpv%7y+*i.#aM|1M!jfyI<ZL36Zi=$w)_6xU#*v[{lf$9d.a,');
define('NONCE_SALT',       'DG?qH-;i~Q18]*XchS6;+>#ZJ`aG/hSTO-=n*IxZ9g&k6sVd$K ~D5A4F|`0!!q-');

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
