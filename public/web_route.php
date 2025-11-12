<?php 
	// This route is specifically for building Web Applications

	use App\Controllers\http\{HomeControllers,ContactUsController};

	$app->get("",[HomeControllers::class,"index"]);
	$app->get("/home",[HomeControllers::class,"index"]);
	$app->get("/about",[HomeControllers::class,"about"]);
	$app->get("/our-services",[HomeControllers::class,"services"]);
	$app->get("/contact",[HomeControllers::class,"contact"]);

	$app->post("/contact",[ContactUsController::class,"contact"]);