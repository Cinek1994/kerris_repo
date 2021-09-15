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
define( 'DB_NAME', 'kerris_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mW^lBudN~l7)[woA@}1rN#jP8p+lW~b+tb/`tP* f<drvsd}bNoP,Zi]arU!{GE1' );
define( 'SECURE_AUTH_KEY',  '6$T99^LJg^V#i@i-_?ltpK]EQjFC,!~kcng`uP7ZWa/+nlR<m)_yCKJP$uk,u7BR' );
define( 'LOGGED_IN_KEY',    'QpH|)Y$ e/{}.FS{c(KO@BQf1M5 (s<_(R4|;4`~r=sv-?*<*|8h&w(yZ+jQBduL' );
define( 'NONCE_KEY',        '6;?/cCgKb4Mk$C=hc26jl+`YI{v8}|n#O~D%t2Qoy]|rNJj$_u%(4l/ib/VwX7Jx' );
define( 'AUTH_SALT',        '*tSSX?0DEG>6O@e_.~#<6fW4%[UnQjCn-/a|sw )vJ!g#/_`%Vk!{xiSP#/*z%Z>' );
define( 'SECURE_AUTH_SALT', ';uozFyq]RMy8eLA)T1o?[2go6|u@J|&b)?RzXTiUoX5IC_W4l{vEa|.BNg6Vq:|A' );
define( 'LOGGED_IN_SALT',   '[=ln0q/=BS{~<krBZxa.|de!`dY!As CH0Q;%VB= uPH5Qhsz3)YeM1{5Q@#xdz.' );
define( 'NONCE_SALT',       'n;CROOYxfLco9U%EP(DQ8d5gFhW$@I{$+x68kF~GK@&`qe|iD1qY~5Au&KqVEp*I' );

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
