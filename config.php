<?php

//-------------------------------
//environment detection
//-------------------------------
if (strtolower(($_SERVER['SERVER_NAME']) == 'localhost') || (strtolower($_SERVER['SERVER_NAME']) == '127.0.0.1')) {
	define('APP_ENV', 'development');
} else {
	define('APP_ENV', 'live');
}



if (APP_ENV == 'development') {
	// Always provide a TRAILING SLASH (/) AFTER A PATH
	define('URL', 'http://localhost:8888/hospitality/');
	define('DB_USER', 'root');
	define('DB_PASS', "root");
	define('DB_NAME', 'sauna');
} else if (APP_ENV == 'live') {
	// Always provide a TRAILING SLASH (/) AFTER A PATH
	define('URL', 'https://www.cabroyale.com/');
	define('DB_USER', 'egod');
	define('DB_PASS', "Freeme@007008");
	define('DB_NAME', 'cab_dev');
}
// smtp Settings

// define('SMTP_USERNAME', 'admin@cabroyale.com');
// define('SMTP_PASSWORD', "Freeme@007008");
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'egod.pablo@gmail.com');
define('SMTP_PASSWORD', "aecpdzjgcqzfoxxv");
// smtp Settings

define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost:8889');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');




// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

// This is for database passwords only
define('HASH_PRODUCT_KEY', 'securiectFLYproduct007miles');
