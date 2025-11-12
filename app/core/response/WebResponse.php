<?php 
	declare(strict_types=1);
	namespace Boilerplate\Boilerplate\Core\Response;

	class WebResponse{

		public function textFormatting(?string $text):string
		{
			$text=preg_replace("/'/", "\'", $text);
			return $text;
		}

		// Sweet Alert Notification Function
		public static function SweetAlertNotification(string $icon, string $message):void
		{
			echo "
				<script>
					Swal.fire({
						html:`$message`,
						icon:'$icon'
					})
				</script>
			";
			exit();
		}





		public static function SweetAlertNotificationWithRedirecting(string $message, string $icon, string $route):void
		{

			echo "
				<script>
					Swal.fire({
						html:`$message`,
						icon:`$icon`
					}).then((result)=>{
						if(result.isConfirmed){
							window.location.assign('".BURL."$route')
						}
					})
				</script>
			";

			exit();
		}



		// Bootstrap Notification Function
		public static function BootstrapAlertNotification(string $message, string $color):void
		{

			echo"
				<div class='alert alert-$color alert-dismissible fade show' role='alert'>
				  $message
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
			";

			exit();
		}


		// bootstrap session alert notification
		public static function BootstrapAlertNotification(string $message, string $color):void
		{
			$_SESSION['message']=$message;
			$_SESSION['color']=$color;
			if (!isset($_SESSION['message']) && !empty($_SESSION['message'])) {

				echo"
					<div class='alert alert-".$_SESSION['color']." alert-dismissible fade show' role='alert'>
					  ".$_SESSION['message']."
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>
				";


				$_SESSION['message']="";
				$_SESSION['color']="";
			}
			

		}




		// Bootstrap Animate Notification Function
		public static function BootstrapAlertAnimateNotification(?string $message, ?string $color):void
		{

			echo"
				<div class='alert alert-$color alert-dismissible fade show animate__animated animate__fadeInDown' role='alert'>
				  $message
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
			";
			exit();
		}



		public static function inlineAlert(?string $message, ?string $color):void
		{

			echo "<small class='text-$color'>$message</small>";
			exit();
		}
	}