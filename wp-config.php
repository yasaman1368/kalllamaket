<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tahlenji' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!;8E=,<VB_XFCBa9#-)8r(+@Q&(kvkT&P3Nz),Q<jx9Q$-0N_.&=oLX@]e4o-C72' );
define( 'SECURE_AUTH_KEY',  '+efB8$Zh^V62dE<U3JJ|>&CcS&6l+-k.%5nw7A6X$pT8fF^Cn&GC~hW=qK5kO Gn' );
define( 'LOGGED_IN_KEY',    'md/5&4+XS$t~sJPH@~m)gd*vDj@{G>$`^m:8JcjO6Id%NjD/O5K;}Dh~,-t%6>Fm' );
define( 'NONCE_KEY',        'ORM05)%3n>IDW-5!4PMHUSIzorqmFddoPCgXQRI~bIP>s(}{Y.FY2gx|0[ 6dG//' );
define( 'AUTH_SALT',        'VU}fef+c%R%`hZ[.N_]vD!14>;G$~&jzLBN{1N)R5,g3byx1]k5|ttkN^-N/39/y' );
define( 'SECURE_AUTH_SALT', '|2$t2O;3dD{D=e~RBDd`TNAq$@%2vuES/Zc3[G+`Uzk_Sj=wCh* CylR=IhE!Pnu' );
define( 'LOGGED_IN_SALT',   'ELtsgmN_<8FrYblgL053)&y.+dzWNL@o:eFd4N!5w4nG6wgzYYTac/8KSZm`4Ngh' );
define( 'NONCE_SALT',       'W#!O{{Y1%w->Ki2q-+kL$Ysb*3,7;s1XIGtw&7/ymo:35N OA}|B E4C(U>^=sX6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yas_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
