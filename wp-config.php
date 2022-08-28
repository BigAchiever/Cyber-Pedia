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
define( 'DB_NAME', 'TeamDirectrix' );

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
define( 'AUTH_KEY',         'h?FK. 4Wjia09<{Fm>kcP%(b=zJWLEWD2}h0d[PAqsSdce2#(H7RHaC&EA:7St*)' );
define( 'SECURE_AUTH_KEY',  '-#FHAi@B</6g5TWKjh[W6Sg0-;,+wNyfY8UEu>z+Y+iN~gZc*O wceUf+j[,HJ3c' );
define( 'LOGGED_IN_KEY',    'lj(QnGDfSEeICLlGTm. %g{AdCM~jYLDKZk,TBSy=*~%[=q0 L|~{%dn5TLu&WId' );
define( 'NONCE_KEY',        '`SH)U6sBACde%{sLOJnF&s>{JRorJbU0V:t<H6O:J,L<_Z+xca,YwAsN>Xzc~F<9' );
define( 'AUTH_SALT',        'pOr+B7r[o.+8l|.1=,[[I_gFe-d@1ad?.W5<DMO2)L?k#..IUtnQq)bCUjh2h4tT' );
define( 'SECURE_AUTH_SALT', '45_9gOu+<e$mRr{:!3zp-k)2~OsQM5SCul-h16o2[A[G1iUjSxc4izNdxOnK|BJ}' );
define( 'LOGGED_IN_SALT',   ':.z)}P.zj,A,q54<!p#?&*Hrt`Q.<<TTWw38cUu?EmxzRNEp7q=`?.Dn!^})ty4z' );
define( 'NONCE_SALT',       '6h9I9sa7&qg>5&BlGz&Kfx6$kN}u2ceYJXi,F:*0%5SAF0M3U5.RaAeCf8UzUtl^' );

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
