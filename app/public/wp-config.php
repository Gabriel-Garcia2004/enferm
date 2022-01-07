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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kwllh/GyFNOuvsQqvDi0NsVTHqImzppa9shH5B/psZWzajzGyMaaDBPQBnjh6cJkQhiTFHgvpGfBETJa0bI6og==');
define('SECURE_AUTH_KEY',  'Gd6HAvmKYZOKzhKgaWZbbqzEnPICW0Uvp1N/irOAC54xMb7lB22pN8KGyDwTE/TrcFE0b9GAYfa7npb1UegM7g==');
define('LOGGED_IN_KEY',    'fsRCy/5N+qFi1lSkVPAig7wb4opmVDovcOmrrqBiD932cmgHqglh9veNbb9BlM/UKshpzmk9FiPX/sE7wd7fgA==');
define('NONCE_KEY',        'shjj+FqgtT6ndnY6FTpBe4NxYkPghzOM3J0MhbictbQqMAY1K/3xJhaLlLuH3GMb2475RsYfNoMUjjwPEX1Vaw==');
define('AUTH_SALT',        'JwycSxAfmAXHhP7g18H1Jb/egnTZ4VnpLIvNWB2wnK/T3+WZ15jYvdX/ukaCjPnpK3L0MGwcFr7WYF0Ii0c8mw==');
define('SECURE_AUTH_SALT', 'ZinPnwWrk4/OcoOXtKWGXc1vRV7jHbW+1pkdUkhFstVW1VRT+rD4/oWaaYDbfPRRdJHq5LtNAdWdXeihj2iePg==');
define('LOGGED_IN_SALT',   '2Ftbxiv+kkl17zX3GIy2V1okI4FCwl4iFgmY2rKCPa0xUF2sQRj93HQrey7Ej4SvUD5LI0tXVZTnSjWTJkhe2g==');
define('NONCE_SALT',       'mC0r7Qqo7H0ASgYB4WRQlB8ls8I+SaGKqobAGkRiTbfiws31ZfCMCPKq480ykIwpvSAXT5SmdZYBeDsN5yrCMw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
