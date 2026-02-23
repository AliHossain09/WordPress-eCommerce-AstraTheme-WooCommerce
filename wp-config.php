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
define( 'DB_NAME', 'WooCommerce' );

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
define( 'AUTH_KEY',         'M&m%.$1sRSotCf <+]dxA<t{HR&bas X0!>]=;BtNoSnZF/({Ck6XXKl?kioQ-m?' );
define( 'SECURE_AUTH_KEY',  'ze/-TPa3m@j&-/4H!PVo,xbp(xC5s+|(_4-z4T~N0@*V#i5lWeur6u_Dw&yb/_qk' );
define( 'LOGGED_IN_KEY',    'haG(lLo5)~R5iLI7VtrulF0$A5?s:yKgaU$=47L`(]0KQk4P49/&xmw8Y]kI_o}:' );
define( 'NONCE_KEY',        'VryBd+/cp{qih)W)gfq3Teu7{b^@.=H){Twf>B}+tsOx k3osh,l7KKq|fqLDH=q' );
define( 'AUTH_SALT',        ' X*x} zKYM{)5*sRf5:E&_m&8s>)(4(TrA, Pn(C4=n$be1,YHu9m+M, =AjZ:&:' );
define( 'SECURE_AUTH_SALT', 'U+KiMoV[/W15y.e55~>dT^suOj30},obiZA/{Y+;@byxkS[BJ]i0h<H/vB:5|:I[' );
define( 'LOGGED_IN_SALT',   '8:|U7{#qspFIluU%d-k9ACSI:.YdX/<=H%9nWe~oJcg><?w.^u#J#D~L<uYC{- w' );
define( 'NONCE_SALT',       'r47G(?KJAfA51wxSu!Zq[=@OzerITx Wi-?{+^|GGOF=1TZl#<o{e4({b*91^.4^' );

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
$table_prefix = 'wp_w';

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
