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
define( 'DB_NAME', 'educatodo' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Host1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' .:iL[SYxETNHvv65cWBv6sr;*^D8j&7^Q[ MK@D|Bs1w2#VK1KRO_01qeD?hX%U' );
define( 'SECURE_AUTH_KEY',  'si9v=[?~ybjZu$7B~_HcMbsJ&KBA//X`i6:euvQxEJO&;.z1tK&S@oGc2)SQWjiI' );
define( 'LOGGED_IN_KEY',    'b1*j@3$d}[XU+`I[u`Oajxc:3-bmdf>=ke<sSZl/(sK[RIv=_[b*+29lbuw]Sopn' );
define( 'NONCE_KEY',        'a>&KM9Jp32nL{x!7a=I{zXK[4C8-.O`:!JzgaF3NG@XsU* ^.|(ms,wnIvQ3*oNO' );
define( 'AUTH_SALT',        'V]szn~oKIz^~E[8tT(ZzODnZ) F3HH[yAw6KotG0d$Nls>8T3Gh9TE{UTCy@j|CX' );
define( 'SECURE_AUTH_SALT', 'ZWehOYmxYSA!l{@,GJu38|?uiTa-hMlg<,f^Ba@7zaU3k+PA[}S1DQ{<cO~+!>^H' );
define( 'LOGGED_IN_SALT',   'g=i @~ H<IqAJ})X3=Vr#]6<:7J~*=-b:R-(bk5=`zO4mSJH+yNg0fRE[1Ubc9$5' );
define( 'NONCE_SALT',       '&FC<:orUesY|^>P@[p+;f(s0BGmgvBC3}>j>6D1:g`)c}b;_puBz^KNF!OXE`sb#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
