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
define( 'DB_NAME', 'fpt-cloud' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M.?0~0`fr$b:!Aa^a ,824^%5AMAAjSCWn#Ahy,@D)F=2(L|ii4|n}Z*f&4s.rP.' );
define( 'SECURE_AUTH_KEY',  'FR/I&$ e./tB?<MQkFn_2A**@,qi-8=N_Tc.N%|Xy%p/=y+bqq><3vWPJFI{@t`[' );
define( 'LOGGED_IN_KEY',    '.HFrH#^NMjMO=OJq_bdc#%|e4da&fr}cA^4$7<m:cewbBdZV84)83%o9uz5=goo]' );
define( 'NONCE_KEY',        'W[`n}bm[PWW8Y<ywMJVfWQO?%aF^TPpyyW93=Fufzdb.yhcw,)P?@H7w!+h6W]V#' );
define( 'AUTH_SALT',        '%+b/Xw+uNg(yLt`&-^}Mx@dGPgn#Rd>5Rz=Gh<)Pd,j4@_~H?J_4]OZz3KpKg3dD' );
define( 'SECURE_AUTH_SALT', 'wLf/kV[)&R6g??N`!MZ~QqzQ5)tuWho=yWiDU#HEY-#29CUIYj m/x2qScCC_ *5' );
define( 'LOGGED_IN_SALT',   '^IRa*Z}g;)Exf~Wd)?<voTkEmR<|BrA27COOY0<M+uJmxs98r1#%@aNXPX0(e&-G' );
define( 'NONCE_SALT',       'PjvM0R6?/~/hm$}CNQ&FhpqWx(1~B!O&fxIpal~=yr3*:2g|cyC5 Ga/RIS#TJk&' );

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
