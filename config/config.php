<?php 
	session_start();
	// URL LINKS
	define("BURL", "http://localhost/stallarpatcoltd/");

	define("APP_NAME", "Stallarpat");
	define("APP_COLOR", "#02B2E1");
	define("SECOND_COLOR", "#F4CE02");
	define("APP_LOGO", "".BURL."asset/img/favicon/logo.png"); 


	define("MAIL_SENDER", "info@stallarpatcoltd.com"); 









	define('GOOGLE_AUTH_CLIENT_ID', '1049394233124-39q8q6ri1gt0g4fkvs7mk15se19nv3ci.apps.googleusercontent.com');
	define('GOOGLE_AUTH_SECRET_ID', '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');
	define('GOOGLE_AUTH_REDIRECT_URL', BURL.'auth/google-oauth-verification');