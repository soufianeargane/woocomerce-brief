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
define( 'DB_NAME', 'brief-woocommerce' );

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
define( 'AUTH_KEY',         'S*{*hD1Z1^q@m} eo>Np;CrfcPreJ@-a_U gZ9@}[{4l#M,wHCyo]i!?;$QooKYA' );
define( 'SECURE_AUTH_KEY',  'E]_KNCe4i6@J,{DTQHTD60B!JUVxt?zTH:PG)(PL8&IGg|(cGuwHq,nc&6mIk~+s' );
define( 'LOGGED_IN_KEY',    '}pw@[&^2s_[!RL~JS6kGX#mJetW*deIDK]j cfEvxg,hE*^2ndGA4HG}}CIVp^V$' );
define( 'NONCE_KEY',        'UXh~*DxH,DWVDH%%w3#zClB.Tr7oG5[(YcX.Cv)iP-}4djEt.,~w?#kF4>RiOWr3' );
define( 'AUTH_SALT',        ';{clkj&?>l5]Y;- IIGE;`gSvMD5#oZMc|xzI o~Y$@T)2*!-.LoS7Md@dKyiCj!' );
define( 'SECURE_AUTH_SALT', '.- :q/yO{+SikY:u7/mFT|GLM#7;t16~&7XLYo$ i[k*m5uO7CzsOL1)#JplVG$V' );
define( 'LOGGED_IN_SALT',   'AXQ}7|j,.1[s:nYb+RvA/.M;S!%`#/Uc6iKjqc>KKAzr|0jK)|ioGI;,t2qNpt<A' );
define( 'NONCE_SALT',       'o<O`,O0|. %%3[|?=j|C0|PP;d-p fx_*a8M KO~gum2$SZze9OZ%Sp3-]f~l]-d' );

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
