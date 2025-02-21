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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miniProjet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'K7?Mj&+;dvr]eMY3Y=!MtQTgUMu0-)iG^0U*!/P40wwE{]df!R4m2F!>BvFu4-th' );
define( 'SECURE_AUTH_KEY',  '+EJ e,4ize>Ol<X#V~NSYR%UGH3Mo_Vz:JIk9n-|]2eJ:d*A]_Q/_6ePmR0z{LN>' );
define( 'LOGGED_IN_KEY',    'r7SE$E`13l^Fh4!SCUF),^`Cx^|f;r@GMYE/|AW@ E|x@cdGZx MS3z=!EZy`^9H' );
define( 'NONCE_KEY',        'eZlAgd4hr]n1d4S1HAz[IQ^M4fr2zfP^l:a#$B@(JLLrg<3u^!c{ [=t{nwg0h b' );
define( 'AUTH_SALT',        'TO,u{,=J:/4Y[6sj:3>qN^$3gq};h)ixX;FA+v~oq|6d30KZt ekr1u^VJ.6qgnv' );
define( 'SECURE_AUTH_SALT', ' _&8 zE(c$Jr>ctX/*[r|?d&K/LQU%TaN1NdKF-7%9u}Ur;g/8;qV$!2qFD.pW,Z' );
define( 'LOGGED_IN_SALT',   '#ce;4v<lCpX`Kai;0)^NO.` YGJ0eE-~^:{D=5EdDKZC4en}J3bQ(eXQuIc;9v/u' );
define( 'NONCE_SALT',       ')%>PT=u]y{>d6YW!P{>k;TmYs;breiS,=5jFQ)U0v!c6A]8lT:wer|Hi{J9i@<b2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
