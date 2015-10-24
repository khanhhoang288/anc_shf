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
define('DB_NAME', 'anc_shf');

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
define('AUTH_KEY',         'Y%Z,8h%55=+ur:W*}-`lOeWw+sCA+7<Bq+yot&<]`c1*:0.,b3|&:-Cm`FbnK$3/');
define('SECURE_AUTH_KEY',  '-M3cPLmLZd?k6:h}9#+h?9|#1edtsa7b287sVT:kemyP-=FJAo&OBmabqJO>&|p2');
define('LOGGED_IN_KEY',    'Ux:=xMgKBIT|lyP`7 ]4QC6aP+SZ/#G-S3R-eVUBj*@I%F?mE2JE-}4Y*j4N!4c8');
define('NONCE_KEY',        '^OUShA.|N1Q)Q|Fe1t{tu36O|,1$0BYL8b(m/N&F^wJAHLE=Q&ez1;VK(35)#|z]');
define('AUTH_SALT',        '07p zzNj%Zx67gLR8@vQ4|,P^ip7]7#bNI5B`2QxQ5m-vo@A|yv(a-=+@ytI|Sp|');
define('SECURE_AUTH_SALT', 'qWq>9Uv+Yy9wId!o8 +m;5=Yv0-9Md&ar@{W0jX]ae|C),:L1+tl_&l]vUY+5)oS');
define('LOGGED_IN_SALT',   'l.fmXX/^^}pTSq-UtTDTBq}+[m{&~l5xI@;|XEwr6Jnp^0MW)J_Ai-1ByV|C#:IN');
define('NONCE_SALT',       'QcMu$AH+?2p/LPxb:D^b6*Au=;(LQbAkg)=P1Ea2L;piXS2=R]-k1+#NIEQ>z+8k');

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
