<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

sudo -u www-data echo "/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QHI94|TaO}aa{vSi7]<tW/ZVcc+MI,yG5gl{|Gh_R+IGyo*VS]Pa`7_3i/.<!b]=');
define('SECURE_AUTH_KEY',  'mT%# 2|~:}uXEf#&FkD2LyYgyR$NAS*|Jnuljn+1%%8a@%s6!OtS~M|}*ELy^nh$');
define('LOGGED_IN_KEY',    '(YRs7[HzB=IdA|O,y|6nF*z}>!N-9`/h<0BMX}#K_4|TWzF@(3R_uq+kYr{G(j|N');
define('NONCE_KEY',        ';JIA ho;gZ}K%,BGI/|9+@e?-D+Pn|ZZ=`f5Y+2ad.?|svaWkxe}nH;aq^R&fxY9');
define('AUTH_SALT',        'Ud.WjMLveRt| +&by.fT`+%k0@{Lz(mJ)w1 <Wib8n6~;}SBR[Yv;*M^.7{+Q|EO');
define('SECURE_AUTH_SALT', '6L +WEAB[V;Pk/I2_=~ZOqUu]|>NVW330pA%=z9ACK/I?FDs^ 6$4-Z,5}t_`43s');
define('LOGGED_IN_SALT',   '^AfH|A-xSTl+lbwxZg+I0r%>!UWQ2Q)B]{&:0`a6&0_IP3SE-6Q-&oRa9gWvfWdS');
define('NONCE_SALT',       'qV7?o].*+GCp{`-+T(Y|xC0L5Am+uF8hM~a~~D<!m~WKNeaa!%!z2;~t0+YVpnXg');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
