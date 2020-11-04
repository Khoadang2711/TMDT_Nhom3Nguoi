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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'l<jsIka@il]R@e8hk(0KYYf)pMrFz8pzT W}sSf{RS*sdHxlh-s9ld@L8`UqOLEo' );
define( 'SECURE_AUTH_KEY',  'L1fg:EwN^B}(I].?t;}v*>_Yaj>[&V/^OR%Umh<GH)c:EPX5?jn^DzJso/mI?e`9' );
define( 'LOGGED_IN_KEY',    'c.?mdRSJu~<>Fp<vSozrSMh4cdnkDH%KTgcI#3@+w)54e)0m?Ti/<h*~*egf]}Tk' );
define( 'NONCE_KEY',        'EYR7bl<(w4NEcB=/d`;Af(4=A^>f!+^/,S%tV3-{G)k=82e2RZ8*wKuC1y5+,Q7;' );
define( 'AUTH_SALT',        '<JF*=9@<[iP[jhlWhE{MQ4^7{+h.%^RMve7:/F8;.@f AIr&VF9Yoz/Cc)Zt0l.G' );
define( 'SECURE_AUTH_SALT', 'qRqlc8R8I4G[N:[j{f?s}S%ZsWQ[]^T[,=@gr#J>j-Gq`9dH&zzV)i-y1pS8sFKF' );
define( 'LOGGED_IN_SALT',   '|)j2vPmuEtHMowVq)F{41QMSDP1jnP5o>j=!~1#4/-ee9e|5nTpnaMES{]R9Jq~6' );
define( 'NONCE_SALT',       'r@v?WE+ow~,PKN[dK$,+=q5$-a736mm5$=&)54|WT1orItInmk+{>.5Ovy;/@yv(' );

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
