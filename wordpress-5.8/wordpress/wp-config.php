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
define( 'DB_NAME', 'my-site' );

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
define( 'AUTH_KEY',         '#^!6SLH6_u74I )Jn*nlK;!;[K})|X<pN//rZ*t(L/JC/Gz;V:X(R:1P!ULbVxE:' );
define( 'SECURE_AUTH_KEY',  '/FSDw.p+KWNb:i-<:bdKU^OelZtQQ#N4}[TPdx)<;|Ngbr5dU_T[myPmzp;:>nC-' );
define( 'LOGGED_IN_KEY',    'biB_iX-x.~FFv_b|1)f&jw8[WLX$#t(uYolp}2E}7(e8R0YhRqyel$(o6)[d<)(Z' );
define( 'NONCE_KEY',        'I_DjsS~q3^Qjl8na !^6LvH4;gU$3/LFypQsRAK[!X>~jXh+[7@Ar4|+)8Ld/ttb' );
define( 'AUTH_SALT',        'lvs,Yw>YE{KZJWb$u~N4-X5J46[SI:=b|zg<3{k)AFdOJ~,vUTFM nyd)+|K5}?`' );
define( 'SECURE_AUTH_SALT', 'f[;*)[FpGZR ?@b 4WAi[y+QO/PM>BnT!PI[rZ~&R!6kVm^|=3;odEXp.MI..JP_' );
define( 'LOGGED_IN_SALT',   'g]Wv0L+]RrZQu0Tid/:dhVdxZ&t/4.#hQs+:z;N,KBFq6lrC#?msD[N<d<q0SyBL' );
define( 'NONCE_SALT',       'ZZNqZs+K(>8sOcPxKsU]>f/z$ddTa(<i}Fp|y UaxvLv&bA40+E$ `9Ihwbb|EDA' );

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
