<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{9?=rtsJD:FP`=E0YDD~M`!~L1D$NlAyQ#pBth^0J;$<Ht?pW3y3aC)2xQdJ~P]k' );
define( 'SECURE_AUTH_KEY',  'I1s|b!<qEoWOWC~V4F~QVu9y65IMOrP.Hn~jDju3qe0WMyKqw-YSD8lh*IzOJ67[' );
define( 'LOGGED_IN_KEY',    'p!o9*76}IrI1WDU;yx)65>9s%{I1_nd(6GfQY3etQ&Kr8K+TcI[C!Q)]=cz^0KiP' );
define( 'NONCE_KEY',        'TV^-!kSYz-ieyllx`2pJL~t~o/yW>%4eZC:AB_VFx=C!6@,2|bFk$XzYEP!SW$o6' );
define( 'AUTH_SALT',        '@#lA<eP@xgf#qS<jwSI5_oWEIWp&9_ T!&qQN69Q#$G,c<>R-Y0Rl:$9!nWMb$C4' );
define( 'SECURE_AUTH_SALT', '{#Jz#>%rfl%!<#hb[6yQI<dd +>?/<.SV(aS(NoU!Zuj~x~ip9/)@?F&#X+0/JAF' );
define( 'LOGGED_IN_SALT',   'n0lOu}F=NYpW1C=^q6c<.oE@7#p<f}PK2MGD~dnnHc$Ks/7g%^A^WzTHu%+Eb%U`' );
define( 'NONCE_SALT',       'ENlG8`fA_5*+EV$AlK[m~YV>su4GrpP*p, |1(j?u#2]BESJ:ah-{T*fV>z8[Pqq' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
