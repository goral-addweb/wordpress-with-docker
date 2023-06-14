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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'addweb123' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define('AUTH_KEY',         'j^6dGp3p+KC/ob~2vY|5,j+9H}_z,D|Ut4bxWnuC)hur%/qr/ b+AD4!+_4bp6u-');
define('SECURE_AUTH_KEY',  '-LW`5%4q2_{YCZcq>-/F;*WekMZf3D5begfVMJ=*/;Vex^w@H9A(_^mPxRS[4uy:');
define('LOGGED_IN_KEY',    '~2_gkahPB} +8ghgQXW*98LHW)K:^lO,{vU99AKfZe|DK;@g^H~$AO&)X}L=VQMf');
define('NONCE_KEY',        '!{([orz|6Oq!wmCy/cwbtWq,z$TCnHEk6gI/Dg+-`<N nOMgkk0#]Fk>/9PXbM%c');
define('AUTH_SALT',        '4/BrvB_S,++DyZm&XGnj<;&tSVz0-d^%n3Bv59kM4@woRpi*nQ;HrB#-77H1jqj>');
define('SECURE_AUTH_SALT', 'cuyb+<R=3_$;pGQYMpBFH7y.,c)[&DG3REKmwXe1+HGlK Lf?RR57 TY*umSJc~J');
define('LOGGED_IN_SALT',   'JK4!t645qd?$+Z7XPezylcdh=ql,G}=|JLlpL{_k8rhw4r,nUot*o2_D&VMKz!{>');
define('NONCE_SALT',       '@T~85y*aN%R3Z4=.+]es[J-9bBdPbY|<!Z3j]L-Pn+(Jg!q7Aqwl{dp&jDp1GW).');

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
define('WP_ALLOW_REPAIR', true);
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
