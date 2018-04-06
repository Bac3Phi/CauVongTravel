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
define('DB_NAME', 'DLTC');

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
define('AUTH_KEY',         '2M[[y7?_3$Mf@},komCBDh:0Q Lb1@t4j;wN&0UaagdeZF&tf=~Z j2O02!?djEY');
define('SECURE_AUTH_KEY',  'LlgkXrFtH<Eq8I?.w{]dD7*4c:MSwL(mHjF/iQ]6!v}(fg+U2>-}AD2gm]8/R]OL');
define('LOGGED_IN_KEY',    ',u~4vFvJh7?><1!/DVk UGT!Cf{:)iR]>CJNPFvn_nK4O~R*p6$h[EN+7[|USDL*');
define('NONCE_KEY',        '_-i.tlq+.Q+;TfV[l%FADMD?s]kY.BJ>DTv&v>}1IdA%B1y5]tJg0%n`z-ben1<i');
define('AUTH_SALT',        'IKqgz;uYm$Q*ooa@+&/Uii(t=]#fy,!f,p`7|.<]@ODvBjobv~aeDuIt9V8gNz  ');
define('SECURE_AUTH_SALT', 'K`5_c-%;N>Sq&  &]-<Feun6JH<[/BO4F4+-&z<V%+f{0U`:gU]r78,Kty7BuU*u');
define('LOGGED_IN_SALT',   '|+Fb~dT0O#^VUwg+>WE~^4HvSCs1[_XBHVW(EoW< UU}^H.F6?A)*&x}+3NlD?FA');
define('NONCE_SALT',       'TPSb&^/#E!fb~w.%)oNF.Nc>10fI1-k$)7vp}?Xr+[LUQDRF.=)q,Tyn5i+zBZam');

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
