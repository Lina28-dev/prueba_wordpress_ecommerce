<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         'mx.2c<N 10a@b!2%AGO2521i~#@-Y:xgD%Y3/@<H{jY:?s$gl]@_M84FOn74 z#$' );
define( 'SECURE_AUTH_KEY',  '8nd^WQ&MCFz9{4&piRnPz}FFZ`:N_o;wgTTi$<hP}g`8CTXAe4CY!]xOZ,fB2g6t' );
define( 'LOGGED_IN_KEY',    'Y&p2yJpm.b,[NWDUVZ[QF{lC}w{1.m6;P3Va_:)6Og:go!sLVyB}5R1A96PyN2vw' );
define( 'NONCE_KEY',        '/M):(q>d#m&^Y$H(;,<%5XxQilMEhR7:9(Oxg?rLt+>#U1vI1$,;&D,BgC5xa|>J' );
define( 'AUTH_SALT',        'w^qKIUNpsn #J6uP5Kf<ixPo~AMIVS[BCjvh&tP,Lfmqn[ws>gAzU*+@SKwTq-S+' );
define( 'SECURE_AUTH_SALT', ',6_Nb&hVTDO=%}<~8HlRz8rOMfumj{KiI|_/YH@2%Kgalf#D_v@+(`FA^yrA)]Xf' );
define( 'LOGGED_IN_SALT',   'tHe|)<:2T$g=y#1cs#}j=*l(-qid[vFB#.ImBn;A$Z=Zo9~V]x__u#a:la3JoOyb' );
define( 'NONCE_SALT',       'nE4KEg9,-6XZx8fh${}_~gK&SnJvm({^}Q2r=CuFR(4/^5=E^ia5;K+-x1gZa<^]' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
