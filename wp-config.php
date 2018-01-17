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
define('DB_NAME', 'ahoia-2017');

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
define('AUTH_KEY',         '#-B&Fwku*gX6,T.jvBE5Ei!Of#izLXeSlZZM[W/eu<uT4AZ8V-kh:GZHsv890$hL');
define('SECURE_AUTH_KEY',  ']ZM`V21EO&srnGeI04d`sF6P9N]mjJ }|4!oT~x===;A;sR&1r-:OeCc6F1BO4.Q');
define('LOGGED_IN_KEY',    'qCre%=574Y%uQkkxy&b#1ANsl.*Bhs$?p_gGV`e!N}zg{cP$8p~YH<`1[<VgQr3o');
define('NONCE_KEY',        '*+V*db{b{c{Fg8w|ktuo0b%YD-fTG|{wz]ln${=<gm(@r<m17/an$N!@qC356u(n');
define('AUTH_SALT',        'OY5.CMNEf7,Y53mJR<7#K@5NbH28*~Rz|ufhefteod_GvH@Z#+)t3:VI2l)NM 5&');
define('SECURE_AUTH_SALT', '}DX#JcJ}#u1t1^mXKOU#|`2-!20M/tMUP-A?^=yMU(hk 3^!4:)Mc|ho4<K4<J#?');
define('LOGGED_IN_SALT',   '*O5.rK4d`UpwceX$1[q/Av_aXF2fiu#nEDK0cIJ+S%HNE]HD.si}&=r~F?$J53li');
define('NONCE_SALT',       '[`?@kgLDKk_uK*BJ^^BqovDp!OQy3cE:Ur6{nap#T(]Ky19$nb<kq#{UYFn0|=tI');

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
