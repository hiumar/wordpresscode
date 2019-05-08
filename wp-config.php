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
define( 'DB_NAME', 'FirstProject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '$eh@/n8eF5MK%LW*ds8yx1Vh9;.L:hnS4TamMqAbWU.e!VGq5[JyZ.R=Ki`tepMO' );
define( 'SECURE_AUTH_KEY',  ',UnU:9%..y{%B#A$Oo{5QtRuoh{ad%C-*R 2u=4-o+Zca2v3 Uzw4#:<|P8q@jt!' );
define( 'LOGGED_IN_KEY',    'vBL[$=j8=]*}kJE6T0^a=dww`mB0u=/#=J}?`}{&M5[,^8[h?*~I~E2J/*d!Pd?Q' );
define( 'NONCE_KEY',        'm;>)HfEN*{@W(&S,K&qFty8{oOH_}f%*/{1u}Xfd|4}W1y!!PXq/,nK7*/k;N[I8' );
define( 'AUTH_SALT',        'Xr=pLs6u03/5@Mdt,6]HbH5]#v(?t%R.RqtCfyk4DQ45/R`rAs.IHKGR2tTPTt,T' );
define( 'SECURE_AUTH_SALT', 'il{an7Mg%l,gWG/[+(olLD~8gW8cSsMOd7B[O_n@z*Va^0j<<Nlg0C)`O8DUG,4e' );
define( 'LOGGED_IN_SALT',   'B]c>p_=B)$vr3vUJSX*r>NMpp*Bc88mLkVnQXv:%2mFj&dI|2Uq.d0U&n}}6-1Pv' );
define( 'NONCE_SALT',       '|;v3Z.j|6{3/#T.04(cWGfe-XGo/36)_*RQuZ}iPV1@2,D.K`MC5-dNv;<}:-*V?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
