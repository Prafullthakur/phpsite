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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c?vb}B(2w2Z&pG=w8o={7yI&q!Zv4-bV=_Nxs~$Ev3wK`8kP!F9i(6>EwJ_YZ69]' );
define( 'SECURE_AUTH_KEY',  'm[|KfxK(1.M0nGTmP${;m):Lvv@inW[MU6^r4FdU14fR2is|Y8t,}oar9Sgcnw-i' );
define( 'LOGGED_IN_KEY',    'J=G3|ZkwBzG^1J450xmTYTqt:SSxmtQ&Wm_83]xM2I{=]&rq5+~<+S&[dV]>!!tp' );
define( 'NONCE_KEY',        'jw:c6:,gN B#e2 1EYM&y:o*~gS(FWlgaIZ1:t:B1l Z wmI+H[8 f^a@_XmV]^^' );
define( 'AUTH_SALT',        '.+94wl`5V9%06L-)|@/j-Nwc{sGh}#PatF:<gL`AiZ]8@@>EGa+sNSm_M6l*#DDG' );
define( 'SECURE_AUTH_SALT', '+PAzb81pznun+Cqivxj(_HBH(~Jx2>:t#=[ *QF%iF4[94:zfn>/yzq|]hB*`52{' );
define( 'LOGGED_IN_SALT',   'Le-*p*mZ96COn87Dpv0pt=zNuX^~bqRDuVp5[ZA(>Ks+7a]->~Rv@uNG9vZ.)Rj|' );
define( 'NONCE_SALT',       's#h/JC!4z!rkaE[Z}>TdznOprJ;%^pK-6a+&<}7/+.v$awU-Q0!Z88{.b}sKj}My' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
