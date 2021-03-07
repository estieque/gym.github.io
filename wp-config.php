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
define( 'DB_NAME', 'gymweb' );

/** MySQL database username */
define( 'DB_USER', 'gymweb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gym1234' );

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
define( 'AUTH_KEY',         'f1FHMg^T |s4oOQdtA-/_Gq_.H?j+y!4Ndy#H,`<!-lrCR>0S`* 3+N2$,xu=( 5' );
define( 'SECURE_AUTH_KEY',  'Y,B{*is#~~^h9f(t)-=IQhJ,[ImyEPX/KWn7dYUO,+?0jMs)@&M8`eck2ePSNx3L' );
define( 'LOGGED_IN_KEY',    'E}LaK}Bmw8uX/cyPKLs| (Y#]GuOa~y%sA*P;OL57GS>Uz&=nxDte!!;5!IJizNZ' );
define( 'NONCE_KEY',        '[;r/82nPP3HB;(W4.i)2hyq(HU8OvVtGC,z0DK;.{;:.0P$$9<H/,>v/bFA TEp9' );
define( 'AUTH_SALT',        'ou`l)d]Bnua^^Up}CC=`VF<G+@qyeEYX^JQ!}naWU<ZvFp8m? eIOzgd4*v_1+j@' );
define( 'SECURE_AUTH_SALT', 'O:.jOT35D|snuos;ayd(K<;OJws(E#czl5Xf7 aZ&UG@cUArdzH]?IY/R$euob-6' );
define( 'LOGGED_IN_SALT',   '8f{)`F#]X R@|i5y>7,WJ>J~eeXT?+wZCSUY^-YSCdoUp^]ojw`3+5u:5[%,`s7F' );
define( 'NONCE_SALT',       'g`19I},;HsK55aE;3zD,:suKeOi%`;1D).dJBP#PLP1VN`T/%nON/tav=zDV{c8{' );

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
