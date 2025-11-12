<?php
	declare(strict_types=1);
	namespace App\Controllers\http;

	//use Boilerplate\Boilerplate\Models\UserModel;
	use App\Core\{ErrorHandling,Database};

	class HomeControllers{

		//private UserModel $user_model;

		public function __construct(){
			//$db = (new Database())->connection();

			//$user_model= new UserModel($db);
		}



		public function index():string
		{
			return __DIR__."/../../../view/index.php";
		}

		public function about():string
		{
			return __DIR__."/../../../view/about.php";
		}


		public function services():string
		{
			return __DIR__."/../../../view/our-services.php";
		}


		public function contact():string
		{
			return __DIR__."/../../../view/contact.php";
		}
	}