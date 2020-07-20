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
define( 'DB_NAME', 'lesbonnesgraines' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aKLEe_xn:~2AUf[OkHObp9.mg:}0Bz Ueu2+JAOx#*izzJCUk=[>#;,DEfPDHcPQ' );
define( 'SECURE_AUTH_KEY',  '54`x<ic8>Ii^rd{JYPcSv>`xgAj5%eKL)|52KvD7@3jms0MYI/7O`*PKWFA>`i>:' );
define( 'LOGGED_IN_KEY',    '=Qf)7NqA0>998}tf/Ne_KXBNfT((}^}56B=@7g@$4h`WHv/l+^_qwug)W1iMO30I' );
define( 'NONCE_KEY',        'Wpn<2O(FZn|@NvWEZb08n-r:5APdIe{qu|Qo8bpK7!zcy(ejTY}fhVa&mEKu5/is' );
define( 'AUTH_SALT',        ' B+1.mr=@>.yme7s8G6<duc<A83.rZKUk&1M~JLrFzdcA9YW*LW0qwVX`&(/67]`' );
define( 'SECURE_AUTH_SALT', 'G3nnC@r,16rVbBAFUI6@Ei:p;n$ivZplzqb0nn8b7nYuX1i}tbYhqN[hS,#f+|T`' );
define( 'LOGGED_IN_SALT',   'WD;K!-$~B-=aD.k[FVQN8CsnE<R(DB=3xzpm--9[w,<d*}SP4XLEuVj68QY.<>iN' );
define( 'NONCE_SALT',       'G)LKWc)`Rvv0EeUPyAO.4X=o[!CL2dLnZozm~WVfJVWUPH04`z>? }xu)E<9lU9]' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
