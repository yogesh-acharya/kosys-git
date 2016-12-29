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
define('DB_NAME', 'woocomm');

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
define('AUTH_KEY',         '<Tpqf)RI(FBDPbN~k&UU(5yJlE8)$y]:E6bpB_Q_.:Dt*uUD04IREI-S),PzsFdF');
define('SECURE_AUTH_KEY',  'dN?TC|5@ YA?FgzqKt1b!IC?:r/3/kh4U-mbmKXe3ExvC97Roys?CY>tv6J<IRT_');
define('LOGGED_IN_KEY',    '*tER5PME2/D4njUg1vvq*a*bA RlJw<tSu&-Av6?Z]^.v34P~qh^ZR>}q%`hp^R{');
define('NONCE_KEY',        'njxHpsmDp*Hfl/inm174Ga9f&c3K(&StN!{{> F]W.Zxlm~n~N>XY1,*L[4i96Vy');
define('AUTH_SALT',        'mK4!rR5#@h7FJS)2Pv/sB;j$iYN-s#=^7ysVb`@pz(Y|0@n(@4eFO~J2H+kU@Igl');
define('SECURE_AUTH_SALT', '%$3qs[);5rs5 O,P6m$wO6b+ $ Owc!0W|BAG_XsNE9C[<JQO9*g!Bi1,f Qhy&[');
define('LOGGED_IN_SALT',   '/ nrGH@I3Uk>2`ENMKO9&VAv{-$n<=Sa`RF#)uB`[a6nkSEssdH[b4-O9`+!S&Z2');
define('NONCE_SALT',       'NAN;eYI]*a>#(xs9!-j:QWAmnBgZe05__7A/,fO]^$`Vcb;=S8{*cJx]&lRY>dE ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'woocommercetest_';

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
