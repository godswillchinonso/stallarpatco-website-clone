<?php
	declare(strict_types=1);
	namespace App\Controllers\http;

	use App\Core\ErrorHandling;
	use App\Core\response\WebResponse;

	use PHPMailer\PHPMailer\PHPMailer;
	//use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	class ContactUsController{

		//private UserModel $user_model;

		public function __construct(){

		}


		public function contact():void
		{

			if (isset($_POST['email'])) {

				$firstname=trim($_POST['firstname']);
				$lastname=trim($_POST['lastname']);
				$email=trim($_POST['email']);
				$subject=trim($_POST['subject']);
				$message=trim($_POST['message']);



				$fullname= "$lastname $firstname";


				//Create an instance; passing `true` enables exceptions
				$mail = new PHPMailer(true);

				try {
				  

				    //Recipients
				    $mail->setFrom("".MAIL_SENDER."", "$fullname");
				    $mail->addAddress("$email", "$fullname");     //Add a recipient



				    //Content
				    $mail->isHTML(true);                                  //Set email format to HTML
				    $mail->Subject = "$subject";
				    $mail->Body    = "
				    	FirstName: $firstname <br>
				    	LastName:$lastname<br>
				    	Email Address: $email <br>
				    	Message Contant: $message
				    ";
				    $mail->AltBody = "$message";

				    $mail->send();
				    echo 'Message has been sent';
				} catch (Exception $e) {
					ErrorHandling::logErrorToCustomFile($e->getMessage());
				    echo "An error occured trying to send your request. Please try again shortly.";
				}
			}

		}
	}