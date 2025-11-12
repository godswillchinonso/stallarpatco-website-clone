<?php 
	declare(strict_types=1);
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../config/config.php";

	use App\Core\Application;

	$app= new Application();


	// Include both sets of routes
	require_once 'web_route.php';
	require_once 'api_route.php';







	$app->run();







