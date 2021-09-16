<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'chillc_staging' );

/** MySQL database username */
define( 'DB_USER', 'chillc_staging' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jt3%81sj' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '1tE9s48~S!#G-67L9JZaTJ4Qyw1D5W_aJp*~(yhVxFf-42rS6g7!I0-|)zb~4;M5');
define('SECURE_AUTH_KEY', 'M5/zOT6(jxTI(6!W0K6HKN+7e@jIXa6O-ahY8hYq1#IPlp#643X@P2V*v@K5I;2_');
define('LOGGED_IN_KEY', '#i9cI;H77*#(gg:@_+ob577n%@8lr:cb3T]5P%*-36J-utv_hS~lv0JOU0&T:USY');
define('NONCE_KEY', '6417xNZ(*/3#_2-a65SxXdYE01[3Q44N33#y1B*Dkh[!&dDa57u[fgPT&Ul]4eMr');
define('AUTH_SALT', '7U9#B8ey-*bmL:i~5K7ONOH8_416~fxjT/8%#7tT)%_S#M3qm&4(/NiW!%i9z9o#');
define('SECURE_AUTH_SALT', 'eB8pxH_Q@h6d614*1tUW_[R57-Q7W*!)0_hObv%O2zsJHY9h6]/gLY#kC;7UvL#F');
define('LOGGED_IN_SALT', '(M9/D-132T6x7%F2K);&!kC1P7gu@+y9-5]YYtl9yV824@m1wg2+1V52Vqf8Cl|8');
define('NONCE_SALT', 'N+4;5F4Q5#z:(lpSCy523BE(U#sz9%E0lUr;p25*2#v/DWTL:_uLQD78(IBhZ8L]');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QRP5gZLJ_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
