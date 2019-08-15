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
define('AUTH_KEY',         'baLrGwTYUdcPacOiGi87QERM2+ygH9Br4VQdRzbU2cdEykxzTy95arUIap3ZObyovhzldMgtyXO0JfKJw1gLFQ==');
define('SECURE_AUTH_KEY',  'ZTFZjVGxwGE3sTTQcjOGpXxHnlXOPoqIgCI9sbjfKoipr66W8EvRrwmtvmvvUzg/yDB4fytIV0fpGwnSwk5d/w==');
define('LOGGED_IN_KEY',    'kP+nquTwwk3imN3PcmIA17DyQ/yodC9hrNmZtAnT3MhO4TV0X9AO19voQOKtm52CSQldzFrstvqa82zy/gUEIg==');
define('NONCE_KEY',        'kQ4vZ9ZgtuJ1fzd3Wn32bVvWramZ0RIJgrxUHeufvrHZLK1NXQkQRAnz7HHlTV174us2K35LI1V2C8LzcW5qng==');
define('AUTH_SALT',        'C5FYgDoZJBUPMUGSNSXU1O4qPXvqMhVw2Q52XvaCu7/CcYQif97KvPfxpaA+v9zmvJVLdHwSTxMSsfgfa9DM3g==');
define('SECURE_AUTH_SALT', 'yD6MUnticZU7pEdK7A0YzyEaLQbojR+QAoYEROiY6tguhtQ5YgXx7jHnIV8Yvhbk3Uk3wlmSj7qRAzwMrNKwfA==');
define('LOGGED_IN_SALT',   'dTB2pwwXh3J6CPRm+FWuh+LwoZ/HU+fcOTb9NaQTyN+nsTr+KzrpSh6Ohxp2XzQlo0bDGOFkk4pXFeOmkeotaQ==');
define('NONCE_SALT',       'FismEU5wt5viilZDflhJFhnJrsypH2c4AHN3xubPXItbGqtyO/rcSLEKXNhLq4wrYCT5F7J1kE9SYTrREfRSpw==');

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
