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
define( 'DB_NAME', 'businessepic' );

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
define( 'AUTH_KEY',         'wCf8aU.WG[!d1P,qivQ>J,0V2Kdg6;f0` k3P:Tu8gRmO6~}fW=EA5)22N`7HEyr' );
define( 'SECURE_AUTH_KEY',  '&Cb-{li}iX;BfrOcDCJNlccYQu~)8r5:xq/YGyk4_i:sG!!(B*aG#_/{j|t%<H%d' );
define( 'LOGGED_IN_KEY',    '*OaLhwb)A1sS-Z{Gt2MbwVjzVbvT%JUb*O.%SR{k*Efrz+n#1J3IP7|}DLhahM{<' );
define( 'NONCE_KEY',        '|8|M2]@tJY> [mO9B,Qp+1M>OC;WaV!Y)C7{^LD=1:FwX&Gf7.`%Ucq*vhCWOPaF' );
define( 'AUTH_SALT',        '+ifhu*U@*){Hl(4n!*;nh2:+^*=&tjg,?&H,3twh!uV/G,d~YodScY{l;czx/PfV' );
define( 'SECURE_AUTH_SALT', '`g#T#&N?%kwVB_|CR~)H<(K;yL%8GYWn:Q*Q6|/}kxNurG@g*f+ePS])hsX-1?Q!' );
define( 'LOGGED_IN_SALT',   'uX8oaHfXc_Gf(+8T^CXA2jxnZqmnH>K>{O9,V/!i>Ev!vJrEp-axR*JIBpAJgX0t' );
define( 'NONCE_SALT',       'xLTqQ>C._x6=_cP)wk`4<<P9ylP]a-vf#I(po>vH{O3M0]45n5UQzKZidW,!+x{}' );

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
