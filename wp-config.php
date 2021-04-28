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
define( 'DB_NAME', 'ecomm' );

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
define( 'AUTH_KEY',         'ip^{_cV?d#jhS55v|Ju!9b~1tU8:8Ik#I<3Ptp>9S:iIRE,YLhD^-E@`5&K_ct,m' );
define( 'SECURE_AUTH_KEY',  '`Ecvyzm_Ac_x7XG0]p?lqK.6}hyRnU4@lJc_q1>}G0eMOc(t@6Y!f_aa0!`TA2oX' );
define( 'LOGGED_IN_KEY',    'eMfW=+Pv)tw7mv1j%AoJEhFf*KU{eaZ8eN-;[z>y%JQ{+mx`-W8O TF+eF2PD<Ke' );
define( 'NONCE_KEY',        '(RKt*WuMa@3TIabE778&w!-cse*Ehl^E/p}@gyF=}YCNpHem`BZ=C.n0(ss{EfvT' );
define( 'AUTH_SALT',        'F8i#[)^@A6Y)2WLnv`f/V@e/=BdjASybvMU1,s#{ka9^Zfk-T1lXfwBt{RVA^3Kw' );
define( 'SECURE_AUTH_SALT', '?{e^1@}9#P^( g1!Z-#:<93CL1lGNK#Yu?ba`rLf0v$Z|r)uwvC@K^<]p:p[Z^rP' );
define( 'LOGGED_IN_SALT',   'Wb[DCHn!o.])rbz$)S.u/_&nxhJ?T*_P5tuanVILXkS]?;!GFzlzNB#n5=#c4I:l' );
define( 'NONCE_SALT',       'YF<h`dr0$mAj~fK7f5m^zaq?3EN%K%w9]/,tDj1yd&]*dMYz?@kxWuQ-hNRHE&D;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecom_';

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
