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
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         ',y{4cA1~w[b4Utp[I[y?QZuMGkZN99E65us]?$<Jt3Mf4k&ZI-.c>cmR/ZV3G9Co' );
define( 'SECURE_AUTH_KEY',  'pwG`a  QR~&$&F<x#b@mM?Lo=#v+k/tQeVqFnkJyF>`,3GQtV!8(9Gz3^Q^aW{M@' );
define( 'LOGGED_IN_KEY',    'sVxzo8;Tgm%wu0Q}0Yl>xqB!%QBv&NaB&yb6_Dy/)ccJ%aayhl)G(#aV.#R(?hK^' );
define( 'NONCE_KEY',        'R?e5<b_}1)NRn[QW3jE)}!@aP)BUxP0xjsPQh&Nl%j`.~qQ*oPJ`o]o<F4(N7GqJ' );
define( 'AUTH_SALT',        '9]j*,ML<~=ow#pr$_}3c_};XyfK52HEuL^F[0K!3`-H8Uzg9A}43:wq& B7Al@w2' );
define( 'SECURE_AUTH_SALT', 'E!.PoyV`JR%o6nX`cf)u#FPt(7Y}l78-n|q@${ r.&iYdh>kcG|?0@}Db]%ShMq-' );
define( 'LOGGED_IN_SALT',   '%ZfX`CX<Dh(/$@C|4h6`$Jyx:Q5Vpn@+ob8V!m~(w4%*Qv$QM0pE,B5lA;inn9NY' );
define( 'NONCE_SALT',       '9{&I&;s|*dPeQm81IS}3ax*Yj]rikpt-I2OJlysDmXFFt6S{;Y+OOOH&m-a]i1(4' );

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
