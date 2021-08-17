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

define('DB_NAME', "digi");

/** MySQL database username */

define('DB_USER', "root");

/** MySQL database password */

define('DB_PASSWORD', "");

/** MySQL hostname */

define('DB_HOST', "localhost");

/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


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

define('AUTH_KEY', 'cf54ad14c5a6598111c15df1fbe68182e669de0dde86e6911481684865218360');
define('SECURE_AUTH_KEY', '5456f76335ae2e14171e51a96b7a03f2ff56da37a23e24d46c4d4875a38d6be2');
define('LOGGED_IN_KEY', '34f4f0b84e86f41d56d9d891adffbc6b6ab22d6446edf8b6d124b37fc8733d33');
define('NONCE_KEY', '007f535da01302e18ec7826d33b25fb329a4110fe7fdf90b4bf39bb83475e088');
define('AUTH_SALT', 'f90b81eff37a716e421bdbbc5d40e9cd22532dd3faadd45be7798b80e0f7694d');
define('SECURE_AUTH_SALT', 'c4c9e2f2800c4b2cab61709f45231f5e159b4671b0be7de63d0a91f61388f1b0');
define('LOGGED_IN_SALT', '76c463d32062f5c342775c0118050030404e1798bf2b94911d15f057ecedf894');
define('NONCE_SALT', 'e1af9b98d7b78544303e1916076db344019f2384673c61d9a4418b3c3abf9d4f');

/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'lGu_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

