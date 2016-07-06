<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'F(}Xtz3j!&#v7t52c+]@YVz;0BbP*%eX^^IkA0RKsb%]2w*ZXk:mCvL7L6%qAcS-');
define('SECURE_AUTH_KEY',  '$ ]g1=glNm+9@ +6cQ*pprM}@&JLmFhs)*kr@}kBo,Kv4!&W+[)1<m|P_p@U@gR8');
define('LOGGED_IN_KEY',    'tT<@+**-TWjKt,!WE%<86]yzl9)+^W6@d9xNb+~y?j..`)~%D#7+A71b+SHE=iKC');
define('NONCE_KEY',        'GK[[z3%Dk)dl~O`4%>oyPSfwoU/&we*(tx`44UbS5?/-c5kW8+/R+),;i-4vdSLK');
define('AUTH_SALT',        ':y,7~1y P`4{jJ/T]e=|I?i@[I(@K#ZP}1TZF@L&)}O.;tv6+%avT(t8D%<{ik}-');
define('SECURE_AUTH_SALT', '0GIK4(8GW(w^9R+;o?),O_oXsjf 4XK<(|R,(a27]qbgL8^%#@0~|K_7Q-=D^Uc^');
define('LOGGED_IN_SALT',   'j0OXF`.`|XoXEQD<+{Q80Z_SY;2k]P+2bO69yLvAb,jUkD>:_Nt@}*kY>K^%huF]');
define('NONCE_SALT',       '<cS5Z=W,xvZ wXUPhLHC:TI-,O.gC]+[L&*batsb<^`lP6oO&*ef}Guhg-;_uaD4');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', 'es' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
