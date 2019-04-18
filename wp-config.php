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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '1FEmV7rHCO5BV5KT21b1oH9MkbXyFfynMEt+yGCuwDGFj0Aao0yOiLtdOz+LopfG00BpuWjmR5iLOilqQOugBQ==');
define('SECURE_AUTH_KEY',  '23pNzOsjNYrRtX1+b07aGBMThz4Ubo2A6pFPR/q2hRwHZSmnd38YTnclDq/XiGRWEpG+B6d19BDBGiZhA0dnIg==');
define('LOGGED_IN_KEY',    'otO20eJsHqCmSHg53yFqauWeq3hKYendmvnZXMLNeYOgjQo7qkPd2JhjD8ZBKYYs0XOzCPje3dmp0MIPpF7d+g==');
define('NONCE_KEY',        'WZxQJlX/ZBu5OkoJPniFCfVt5gH4Vq5AYUcXYrio4NrUuuFUnV+98aOD+qPrp8uEsvXX3CY5b2feXe9dbww06A==');
define('AUTH_SALT',        'QGC+lXrZr+NbQFUx/SHYHY0PpLoyozRrgT4lhKxffpuIRg1igKHBfEpPKi54P5ZR0GOk/mTSpGOAKOKO0uiuXw==');
define('SECURE_AUTH_SALT', 'bOYM5n1Wh1kT7F/lceFPngX2/Xddvp6FSqYe8p8PMVstblKAOgg+Avw04h+MJcRie3Q/FbriVqOby4rIrBdXiA==');
define('LOGGED_IN_SALT',   'hk3FIwCHWJsCFGX+OTR480+eZ7C/S6n8b5jzhXOlBT4SrTIAmTTtb97GMMyNklkmO4WRUl43jqIV0/CBPZ3LUg==');
define('NONCE_SALT',       'GscnyolXhMEa+URtOi9zUdk/UE++EOI2frkC6CGTmuiGRHczS5JyWL4qzsiG6FQV/1eVfsCXWYgTqn4R4PA/zA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
