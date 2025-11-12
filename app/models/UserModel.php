<?php  
	declare(strict_types=1);
	namespace Boilerplate\Boilerplate\Models;

	use Boilerplate\Boilerplate\Core\{ErrorHandling,Database};
	use PDO;


	class UserModel{

		private PDO $db;

		public function __construct(PDO $db){
			$this->db= $db;
		}






		// You could feel free to modify the users table to the exact name of your database table.
		public function authenticateAccountLogin(string $key):?object
		{
			$select=$this->prepare("SELECT * FROM users WHERE token= ? ");
			$select->execute([$key]);
			$record= $select->fetch(PDO::FETCH_OBJ);

			return $record;
		}
	}