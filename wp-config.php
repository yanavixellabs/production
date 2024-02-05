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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-[L}&?Xih0+=]uzt`L^@|]:wJ)Eq{cX&4Y{!B3keD[Nh&_KYH@Uq;N#_t3BxC%e.' );
define( 'SECURE_AUTH_KEY',   'BH~//w_|S6$a,lp8`f9-2A*vs)~RNgWk`*<ukz7c:5!ws{N>v+lvLkp@A,Q:;)+s' );
define( 'LOGGED_IN_KEY',     'n9Xn<d{T<=81z@[zw3=QaC*WH>I:(X4c4ab-(=cZ<u_8t1&H.^P:HzBREe7$}+_R' );
define( 'NONCE_KEY',         'qI*0YZ/!%nZ`t0hP.ASO6>a9!zBoHc`cY.#;ii`=*)(%_/kwGLyPm*Nd[nUcH8yQ' );
define( 'AUTH_SALT',         'IZZ,D_^o~QHo6pZQ{dJO!w@.*UQ{o8^hp8~JR-P5[:(~=BQRdg@f!!iKMZLI<EB$' );
define( 'SECURE_AUTH_SALT',  'hsa>JP(C)B^{,jf<~C92*f!SQXHyk{hsrkZ/7)3QyszlK:)hd9^B<wy@HCUe!qM+' );
define( 'LOGGED_IN_SALT',    '>TP V0`veXz$FwS~f}kZYp*8ZfVu:wCG)(jf*fod:k?GIqPE&.NfV?$+?/g#N51G' );
define( 'NONCE_SALT',        'Vxc;3=M_dsA ,FfK.LlsQ:FC:Sye|=9uJZ]f$leKX&]jM}}!(>/LUIWW&+Uz&|Qx' );
define( 'WP_CACHE_KEY_SALT', '-dk(}~,F*2sqEY{ )N*fgVoG])~xKBnVnY2-Rc@+o+$KKNR0|#WIrd$|3d18V&4$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
