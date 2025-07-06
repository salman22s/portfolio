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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
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
define( 'AUTH_KEY',         '?kyIMa+<Y8~[S@Zcksrm!!CwG;er:hQGLy<CMKu#B!j:<A]|QE?huE3y*Z3 xJ}G' );
define( 'SECURE_AUTH_KEY',  'A.I=k<2(Cz8`C[P3BI~OKH*izn/WoV`8c0b)oKhgXq,>iYBr 2$P48iOloJ+bo#U' );
define( 'LOGGED_IN_KEY',    '%h1U[ sv>/H@5Pl^]*-cUnR*P!%R@.h-!DcF:/3V3??_K{Y! }{{%24sl/DV:.Ei' );
define( 'NONCE_KEY',        '*+3avi^` @0%`R3e`Nl{}v.o~2Ny[(lSg!V!AS -Iil&p1_#_~gskH`I<>wW^xvr' );
define( 'AUTH_SALT',        '}FmQF!`JhDQ|/woZu6K{w):=BLp-x3Whli_XX{v5>MLJ_}s#-(S>S:xX1uPc/9uS' );
define( 'SECURE_AUTH_SALT', 'sj1pWt$JT}l$Vu4bBxf4w,tmq6|*|f:$]3u%vAgoO]*~)5;ZJ_UYxpv8LEOHr=BP' );
define( 'LOGGED_IN_SALT',   'cJhalQ;<xD%2u0_*iRDY/1s42r]IbEjipYzQle;fyZHd(9$Miw=Uy)UET?CC|#`V' );
define( 'NONCE_SALT',       '@=l;h][yoR$wKw{Lfb<JIV]IJppj]H6/z~riM*Q]eG(qK1R[/f`=60#8{T.Gu,JV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
