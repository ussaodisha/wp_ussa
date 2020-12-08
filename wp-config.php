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
define( 'DB_NAME', 'ussa_test' );

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
define( 'AUTH_KEY',         '`,@l!D@I33J6j$LDbR&BSkj sij;4UTfY^YQqvPNBaX-V869.Av&*|AHNu>C@QXW' );
define( 'SECURE_AUTH_KEY',  'G/!n $Yx(ib%5:<FAjzY%2q,eIuevSK9Kma%nwrqh1$r?rcw1.P5_^cUfew82mP)' );
define( 'LOGGED_IN_KEY',    '?#TxeytFFwdT9<X3F{^-[-~T|=^!7<K}z?*T;j3;fkj4oyY.z~]rP,v$QhmjS.t;' );
define( 'NONCE_KEY',        '8:{4yck|3yKrAuuidI+QZHB-DrdGK@AaN/k9~j204+L6zp{k~@7LqN/bt_0+]$&%' );
define( 'AUTH_SALT',        'qfXnqWh)t|d}OYU50N/wddyhq^H%tU|f>@PwD>D9Njuy9q@%t7GHi/O#L@[hGiwb' );
define( 'SECURE_AUTH_SALT', 'h|8C#&  &[#;O[k#.$[75Y(d[gaRCpi>8SpvYcGpaXsIZQLz|21 <T<@hpz?fvhM' );
define( 'LOGGED_IN_SALT',   '{VaTFlv4E6837/r/it40EJd$3+dmvG))bRhidLwAfafa>FYuYXAe4@eW28M11.}q' );
define( 'NONCE_SALT',       '9d|3f_x J.J&Kguu8m~NkWH<5,OyqA^#R!.Stx_@du[$/,iv!oOn])aJWzbk$%Ff' );

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
