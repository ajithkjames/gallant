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
define('DB_NAME', 'u948338597_ybamu');

/** MySQL database username */
define('DB_USER', 'u948338597_udury');

/** MySQL database password */
define('DB_PASSWORD', 'eQudevuHaW');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U2WiLkIKlqozO6GODFAS5Bs2cxIkaIjq3x9KKbXBMYZ2ZOzBx94lNlEu4iCCPg8e');
define('SECURE_AUTH_KEY',  'U5jtyZcTLzXQjIvcx8t7GmsS2OxIUaOk4kQwE9gkofZN7lNTmwWq43d0MMMbvO0d');
define('LOGGED_IN_KEY',    '96zCG0QEAaNwr2ff0dO3WvVq66mBQ6YTUGGUR6gKFw8yBQsICQmT110YlGlvi3Lv');
define('NONCE_KEY',        'OLB2DeJXR57qqnE8xkvhCTVn0WqCLpE5b4rZquZg0AmuJJ4ILAvs5hZwwGhipEQO');
define('AUTH_SALT',        'z9XqFws9clz0LDwzmLWrAj4VSPBkoLqC9B1CO7lxpx6ZOR2HcgQHK3okj67a0N1l');
define('SECURE_AUTH_SALT', 'MQbTTpISAAwcURO5KwK4wwoQfSR1uUoeXZE3fqVWP1zKxXoQ0bFn1W8nFRqIIRYw');
define('LOGGED_IN_SALT',   '7jelrhpVJp5RpbM53L0CTXPUbQAszp0BcMXeJVq2LEXep6bUpUjbnzXSZHpDo7yf');
define('NONCE_SALT',       'E4EGmUm3xGJ8nY4MvEmQAVgRUe4TCKlwswqeRBaQJ8mZJYIAFAMVXKhtxP8yyDO7');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shxv_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
