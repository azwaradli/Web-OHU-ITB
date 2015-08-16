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
define('DB_NAME', 'ohu');

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
define('AUTH_KEY',         '+r18./bkb^YNtSk/6YHYY(X}_(VK|oLKU}9fM}0}&s._eKZ+E4r6d*Xb6iyU%)VP');
define('SECURE_AUTH_KEY',  'Q`+bHM!Z F!j%nk< tNvdlltkcKL-_;4$ta.**h[q|uwW2`Ml8cZ?<Vc;Rsxc;D|');
define('LOGGED_IN_KEY',    ')1,|-){]MN*fw^+^%9{9^+@h%48wC|EwY,`TwEs[Z}m^(vhiTm28og4L#+<SW$tR');
define('NONCE_KEY',        'UyUoKrc2xA/;Jw=4.vwO]-F8I#-Tu6vaY/@L2>YMT6eo AmLFN5Io~99!=s(V{jn');
define('AUTH_SALT',        '+6?3#gCZ]%Mu1[u^fSw-},7t%y,#&o!p@|xRZ}7cBc:98t+$`0@o-Ocf:6vvw$-t');
define('SECURE_AUTH_SALT', '_M*2Kqz-%T>u-6FQA9I^Y|ErZvh]c.SIc^3t+#:+1OuTuWU@9*xVef_k5ig~T>}z');
define('LOGGED_IN_SALT',   'S{)&!/K}2?|ae<5NS.ts_= _Ma)mLeF-=Kr;m-@^0owI,+y9c4(X12-{wbTM/0/O');
define('NONCE_SALT',       '?:Wo&!*64Kz5u;]_}~|*O-nWaU[,;YU5&N!0~U{uWw=IsNGDN1T|w_z:Zz rLMol');

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
