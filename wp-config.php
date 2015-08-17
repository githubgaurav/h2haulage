<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heroku_9824ce04cd9eb3b');

/** MySQL database username */
define('DB_USER', 'ba322f18f1ccb2');

/** MySQL database password */
define('DB_PASSWORD', '2628c490');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-02.cleardb.net');

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
define('AUTH_KEY',         '%$@Z+E:E1JwaKj6hOh~7p4TGq;k1s8HZaSsGqk%Ouw-OA2mT`L#uyc~jt]f?tYN^');
define('SECURE_AUTH_KEY',  '^8Oz7r[+)z[85JC%H(/.c9c~@DB;-.?g#fjn9D.2C;N~*YeDch-XdVY?GIK;9tp*');
define('LOGGED_IN_KEY',    'u.r=Da|+%wslCY34CAc~^RY6V$MCG)bLlO-Xw91VqRK&r#a^SOzM`+P@eFYC(!_2');
define('NONCE_KEY',        '_zD!`-{2O.z9S<|W>q>+Ks_x-rO>]<raLPXLg}=S?bSC=-GD,7[tO>NL3Y6}GI:w');
define('AUTH_SALT',        'oQY@/wzn @P>h0+FCC[Q{u)I>{ -L+wP%`c)JnTH[;lUQNL;1Tzvso^e?[KQ,.H|');
define('SECURE_AUTH_SALT', '..dA$-UJlV|=]{>!LqXR|DM%#[GABTE&w^.CgLm(Vc=!Au)] hf[.w{_8CrvScK9');
define('LOGGED_IN_SALT',   'PfI$|DR$0.> Qi.7;w?AU5vB-A*8Mpt1=VH<<~Lf]$u~Od>BLut0^:ijz)~t>5up');
define('NONCE_SALT',       '!BNaGM-BH[[ar`Z5k+@XP-S(-)f3-Y$4YAG>2swg.kVRC6,<J.]+$cBC<IQ9n(`a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
