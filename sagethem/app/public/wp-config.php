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
define('AUTH_KEY',         'vCZMXjbyX1amblzrfll9HQ6lvTchYfowB86MABG3UZdqkyDDcrd/dSAlyVXBP2irfGDrxM5ZEUxCy9buhBzyeg==');
define('SECURE_AUTH_KEY',  'U8OiHBdyn02JbIkN5XbL4oesb6WIVvwUbaioOQI3h4VMUVofEnQf+IUdOLLkaHM9ybtvqwJ1ly7gHOuR8qxLfw==');
define('LOGGED_IN_KEY',    'tbT0u4G7EzVk6cBBKsO8t6ME6U0vCMhRol9Z+S3cdp3jOuqq7LuIXc+zM3Pyl1NMQI5sB8L1c6PKm9FPVahFsg==');
define('NONCE_KEY',        'ueOCu0Q+ZBzKYzQ59kEyc00UTEJJSEJUQVmjF5f5QHeGHQpI7HSEw4QNCnAFryALX406ik8GZve/zSnskruSNg==');
define('AUTH_SALT',        'swzjSj8J++fmx1VeaMDbaNTj6KpUgZMzxdastWcHaGPUiKjwa7gbNbO0PHEu9+VTMqJpLVr2IJHVhmcgL/CwSQ==');
define('SECURE_AUTH_SALT', 'LcuOfmOa5JBFxWJ8KFIKQ56ghPuUcUhZxBCBwuLwO7/a2HnN9zGkYOt6DF5785HRWWqKmpQNSvw8QF+M9zeOxQ==');
define('LOGGED_IN_SALT',   'poqfSRoEr602O7T6WsV49Ec8xeeMjX93fdVK8EE8J/SufZjMAPYRUowHmqmgWQcfZFBq81IlNd0V/+NUK49Xvg==');
define('NONCE_SALT',       'ELu1ymbWS56wNu3PX1Jc1G80LJiF1ZOYbN22d+IJXHLFP3mh0whY74k4lR9v6hxM9fe4SlQZWWgNAgUFUA9MBw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

$table_prefix = 'w9th_';

define( 'WP_DEBUG', false );


if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

// WORDPRESS_CONFIG_EXTRA
define( 'WP_SITEURL', 'http://sagethem.vm' ); define( 'WP_HOME', 'http://sagethem.vm' ); define('WP_THEME_ACTIVE', 'sage-theme');






/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
