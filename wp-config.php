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
define('DB_NAME', 'wp_desafiolatam');

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
define('AUTH_KEY',         'YH{Vw+|`_S1K3w3EaW+nQ~k^_Wj+!)E`D<I5V*(;3*+,3cS?&yW[hsr#|_S@;_K?');
define('SECURE_AUTH_KEY',  'B9UT+FHJ)i?^&DiEx(`%[cjDI!G9R@[XBHb5hzx:ez.?`3X(nC7o>xkj]>wI;,m[');
define('LOGGED_IN_KEY',    'GvzieKB)FNN0xXheazy?*.7^C5{Lp2jB!=a<%ofX?r(Fl?xH%f+tL,Mkmm{g)iI;');
define('NONCE_KEY',        '@ov]-3!|2PATYYeU[o]:xdsF)/z8lwRKd6oiU]Ysp&v=y5[z|a&/thZw{R/UqC4n');
define('AUTH_SALT',        'tg6e.IKFMCZTgw0VtG q^6J*Ys9b)n4?xMe:9?.<R*>7[]!)AT;q*eSpv%FYVPaG');
define('SECURE_AUTH_SALT', 'SW[s=ISUBMyrwd6owyQ<?c 7$}?OMX.|_;6JR$w$i:f[#PEviUCD1kGyU,,uoeE_');
define('LOGGED_IN_SALT',   '2_PmGV:[8%Iqx,!moo2;1_Gg|c;g12a>%miM64-8<Iy>-el]3epz}K+-/bX%YvX(');
define('NONCE_SALT',       'Y{H~3,qjpa]Vy#9RSXJ/F~da9{o<9@x_<us2NUa&)[D/L~ET}ZYB(~049^tOyMc>');

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
