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
define( 'DB_NAME', 'universal' );

/** MySQL database username */
define( 'DB_USER', 'universal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qr4z89VwqxwhOUgL' );

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
define( 'AUTH_KEY',         'km9[0J|HTya|9 2h-FCGn=BlN+x~ Nq5r,:FOk[HLXM2KB6ek9!Cd5K+e)=p5&|*' );
define( 'SECURE_AUTH_KEY',  'HP W6ck~HR;njdi%Va$A.rj;Wyq&S1|l>^=%znO/%MrzcLvXM:,{qOG2+YuP! |d' );
define( 'LOGGED_IN_KEY',    ',i`ddDm)w(V*SiMCnZ)T>l(yWN8@=xFIC[gA!%q.;0bg*]T$%k^pVOWyE5CE%%ny' );
define( 'NONCE_KEY',        '2j@*iehflIF Cfo<-RF*Pe]I:K/1q-t~f]B,r[hIfJ,)~PF>H!}738{Q]t2Oba@O' );
define( 'AUTH_SALT',        'v@rdB`P!gx,OX?PXrOj[xoNz_]]wGAnp+}n>ndSBSi,I;(> *enIiFH,T[k%s?/P' );
define( 'SECURE_AUTH_SALT', 'P+REwV$Ow`7Rqtb?O-f/b>6Vw$c!/z|xRr~KAyjlB6o>fo|,l^2e>b4Slc`nF|NS' );
define( 'LOGGED_IN_SALT',   'Lls^n^e}6.sIjA_pMmg7=4x88Ks^^6ypQ]a5U;+ZNo~lY>jw>EGBK_c3RV|o(15k' );
define( 'NONCE_SALT',       'LwvF,Tb-U((DyU7|LV.SV5VQ>&E0aq+ojOi0ulJ9DS< .6wdqumCiyJxDq/?e)j1' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
