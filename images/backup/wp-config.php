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
define('DB_NAME', 'bekleure_wordpress');

/** MySQL database username */
define('DB_USER', 'bekleure_admin');

/** MySQL database password */
define('DB_PASSWORD', 'tothepoint1:))');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|uqF|+oB<&yj(-YAS.NM6`kC#^ X@ 7TgKN#P5L}Q(HKm%ec?VwJGOpmp)qfe!H,');
define('SECURE_AUTH_KEY',  'L@N^#M#3J+,oMUkw+r|#fARU34KO>)BH~dCC4j-B$iP~ ])MbZR$:a+II~]]zBm&');
define('LOGGED_IN_KEY',    'V$.0-`>c:~+P8ZVoL%bXXr|`! Mr;ms;U*?</A.]fu9_hPE,C0+lm`?5%h:4JeRQ');
define('NONCE_KEY',        'UO|uFT<.x|@]zVHMZf#C-c2gfHCn^rL`5:T=@?X=d|(IblS`SM=Hb){-iDcG[Qq9');
define('AUTH_SALT',        '|#IkjP|CgdC5cKRJ$zzv Y5u:|k[Dd%C&?6<+g]w[8uOrIKinNtklj(MTpTK;Svg');
define('SECURE_AUTH_SALT', 'VM51oGpcH?)6Q-Ado+GA 7ZC^-}#b3hNp*PXO@xHc_(bF3/Xrf(w-:4@_2H&zP<l');
define('LOGGED_IN_SALT',   'Q?A9g?dc<F|;f0${9z*nK8r---umfi:U^KiTJ?Z@pT&z&MB|KN#G9@uGQH)N6@9;');
define('NONCE_SALT',       '? HfzvHq0GP8>`{GeFfkpp,1Gs?#iRkXYoB,fu%]-`!=+-^&NlKsAd!$8L!iL69q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
