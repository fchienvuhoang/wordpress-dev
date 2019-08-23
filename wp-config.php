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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Chien@12345679' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '6G5Va1|E5,?*/k79zWL^L*Sg&T9RcI)PT{`]g9J/8z}HM>?parBLm-Whn|c7C/uy' );
define( 'SECURE_AUTH_KEY',  'O[14Z>:A/+wr6AhSI`=7;N_4r@bh;_rBQ^9ov]%q3f-yF@4HX]Kh2LsL4t1pFSpz' );
define( 'LOGGED_IN_KEY',    'j,I- $E15{[5!;juO#}Kg)nc7*~I!QU! VF9f7+]pwS`%Jyp]5;+c%8EZDQnt[Mc' );
define( 'NONCE_KEY',        'b}3NT0XO?J0Ap-?QMJ]8j?j*En;Gm84r+]#q*=N2~sJ225]%X^{^PQ=k&::Hq4xO' );
define( 'AUTH_SALT',        'rt?]6]2[?eXAyjHa@$[uu=3%F$93!A5Q5S 5u?9$aTa<_uky`M?]smqWfJ4_vrk ' );
define( 'SECURE_AUTH_SALT', '8O6]d.G6At4#JBSJ2qM]?[a-ovWjCpvzmST$! |PfN{9j<K23gN7eRy:Ay0BU5wR' );
define( 'LOGGED_IN_SALT',   '{pqHL:-p;Cm;)=VGLP~}V{7V-X18n)1gi!0o}tB,,0eolX1*Et$h%jUO&=X2EJQe' );
define( 'NONCE_SALT',       'i/,En@,XMkt8L^iI{J>`X/cCTK0_67K=,~<qGZ&pALWEe6mF=;Z[4z:l9H$9hJ41' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
