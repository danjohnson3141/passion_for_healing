<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'passionf_blog');

/** MySQL database username */
define('DB_USER', 'passionf_mindy');

/** MySQL database password */
define('DB_PASSWORD', 'sonya8slash');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'xQ%!y;my..<;t&LWp,*)!cfCQ R69MI<FuWwz[-iV>-bSH+RZ+/wge@|.nd!79-4');
define('SECURE_AUTH_KEY',  'NH&`}_P*y|Abk=9^V6W%aM7hc7NmHD!0M._;Q:yb)4t|@Z~~yYZkn{m,K),D-fII');
define('LOGGED_IN_KEY',    'YO|y)/g$$kB8-UF^SpilVV-MNW-PY%R<|vA5|d+vf:~h;&s>BKL=/3,;>Cs_P%+h');
define('NONCE_KEY',        'l:0W{]mMUJU+2zst{Z*#>Od7ah0Y#(D7OG_D{W?o Yb1EUcbQmX/Gb<C=7Ln#5TE');
define('AUTH_SALT',        'YPoCj<}[?1I[qXWUx*TY-FY/p /)@+u1x, {is{bWN.2hT%*%92|DqYWEX>+ >y9');
define('SECURE_AUTH_SALT', 'z}A5nO+2zx>n/e2^j%xD27X:8LTG&8-))]XZ6NG ;;xscoA)+[,u- 6F5s+ZJ%v:');
define('LOGGED_IN_SALT',   'kRwJs4 &cw>8|EvU92+D+q$JjV2M:u*I,jtW1E0Zi&N+XeqPdFC[wF]^POcwwis+');
define('NONCE_SALT',       'uk{0Y~ }2Oa,JVxgkOl+et*JrKv++&tJtyu;`K}95lWvWgx_!Y-aNMtr>468/ptT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
