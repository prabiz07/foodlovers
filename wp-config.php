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
define( 'DB_NAME', 'foodlovers' );

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
define( 'AUTH_KEY',         'rDJdKN1j]L3iK[L}vFBYj>AmgxDh%s=)el[CGMMwL$zW72eFqs6WG]$c%nW=myaw' );
define( 'SECURE_AUTH_KEY',  'EVdC4Z,W&mP%;I$=`4u]d.q.*Q-)`Xu~6=KdR#,?(Rh}<d!,?bV$-3Vr[a!t5ASk' );
define( 'LOGGED_IN_KEY',    '1F2?F1-JeEMjHHVZhQ5ew,OIyqb-@j+)#1X.tW:k2Ls0Bo}o`/Y %ixrl.@fZed ' );
define( 'NONCE_KEY',        'exl0~Gt*>8xYf5B&!u`&J[x;c^BKx@8]V8*e^BCJOUQbJ t75)NB.-J2QZ)tM3qL' );
define( 'AUTH_SALT',        '4XKk7ae!jM+UT&>Jvdt-B Fk9+3$%ZD8iO4duANDOS4=3c2HN;d/67(~t;Mro+:-' );
define( 'SECURE_AUTH_SALT', 'H8=Sacf1Vg(+KWQyMnC}Yl1)W)Ne(&b{*BkcgJvSI1Bk[i]]Jz`&q{SvBGC|}A19' );
define( 'LOGGED_IN_SALT',   'wW=J`*zL:Yx<oX KHSsESpa:_ v*:.Iy86CuFq=5uM?%j60lf7(;>jD`DJ98wT8R' );
define( 'NONCE_SALT',       ')O)fix.A?j=K76dD0#nOY*QAUr>[JMp7yskOgZ:4!OvDqE-`TmRsCU:z(G;{|88b' );

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
