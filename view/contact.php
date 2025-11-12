<?php require_once __DIR__."/../config/config.php"; ?>
<?php
	$current_page = basename($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?=BURL?>asset/css/bootstrap-five.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL?>asset/css/bootstrap-four.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL?>asset/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL?>asset/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL?>asset/css/sweetalert2.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL?>asset/css/all.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="icon" type="image/png" sizes="16x16" href="<?=BURL?>asset/img/favicon/favicon.png">
	<link rel="apple-touch-icon" href="<?=BURL ?>asset/img/favicon/favicon.png">

	<script src="<?=BURL?>asset/js/jquery-3.7.1.min.js"></script>

	<title>Contact Us | <?=APP_NAME ?></title>
</head>
<body>
	<style>
		*{
			font-family: Montserrat;
		}
		h1,h2,h3,h4,h5,h6,p,small{
			margin: 0px;
			padding: 0px;
		}
		

		.banner-image{
			background-image: url("<?=BURL ?>storage/contact-us-banner.png");
			height: 400px;
			margin-top: 50px;
			background-size: cover;
			width: 100%;
		}

		.banner-image .banner-text{
			padding-top: 150px;
		}

		.section_one{
			padding-inline: 16px;
		}


		.section_one .text-container .display-6{
			font-size: 29px;
			margin-top: 30px;
		}

		.section_one .who-we-are-btn{
			border: 1px solid  <?=APP_COLOR ?>; 
			border-radius:50px;
			color:<?=APP_COLOR ?>;
			font-size: 10px!important;
		}


		.section_one .d-flex-container{
			display: flex;
		}


		form label{
			font-weight: bold;
		}

		form .form-control{
			border-radius: 20px;
			background: white;
			padding:25px!important
		}

		@media(max-width:768px){
			.banner-image{
				background-image: url("<?=BURL ?>storage/contact-us-banner.png");
				height:200px;
				width: 100%;
				margin-top: 90px!important;
				background-size: cover;
			}

			.banner-image .banner-text{
				padding-top: 50px;
			}

			.banner-image .banner-text h1{
				font-size: 19px;
			}

			.section_one .text-container{
				text-align: center;
			}

			.section_one .d-flex-container{
				display: block!important;
			}
		}
	</style>

	<?php require_once "layout/navbar.php"; ?>

	<section class="banner-image">
		<div class="container banner-text">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="banner-top-text-animation ">
						<h1 class="display-6 fw-bold text-white" align="center">
							Contact <span style="color:<?=SECOND_COLOR ?>;">Us</span>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</section>








	<!-- Section one -->
	<section style="padding-top: 50px;background:#F1F1FF;" class="section_one">
		<div class="container">
			<div class="row">

				<div class="col-md-6 text-container">
					<button class="btn-sm btn btn p-2 who-we-are-btn">
						CONTACT US
					</button>
					<h4 class="display-6 fw-bold">
						Get in - touch with us
					</h4>
					<p class="mt-4">
						We’re here to help! Whether you have a question about our services, need assistance, or want to provide feedback, our team is ready to assist you.
					</p>
					
					<h4 class="display-6 fw-bold">Contact Details</h4>

					<ul class="list-unstyled mt-4">
						<div class="d-flex-container">
							<p><i class="fas fa-map-marker-alt"></i> </p>
							<p>22 Oluwatosin Adewuyi Street Lagos Nigeria</p>
						</div>


						<div class="mt-4 d-flex-container">
							<p><i class="fas fa-phone"></i></p>
							<p><a href="tel:+2349126423431" class="text-dark"> +2349126423431</a></p>
						</div>


						<div class="mt-4 d-flex-container">
							<p><i class="fab fa-whatsapp"></i></p>
							<p>
								WhatsApp <a href="http://wa.me/2347070415663">[Click to get in touch through whatsapp]</a>
							</p>
						</div>


						<div class="mt-4 d-flex-container">
							<p><i class="fas fa-envelope"></i> </p>
							<p>
								<a href="mailto:<?=MAIL_SENDER ?>" class="text-dark"><?=MAIL_SENDER ?></a>
							</p>
						</div>


						<div class="mt-4 d-flex-container">
							<p><i class="fas fa-clock"></i> </p>
							<p>Mon-Sat: 9:00 AM - 6:00 </p>
						</div>


						<div class="mt-4 text-danger d-flex-container">
							<p><i class="fas fa-clock"></i></p>
							 <p>Sunday (Closed)</p>
						</div>
					</ul>

				</div>



				<div class="col-md-6">
					<div align="center">
						<button class="btn-sm btn btn p-2 who-we-are-btn" >
							SEND US A MESSAGE
						</button>
					</div>

					<div class="showAjaxRequestResponse"></div>
					<form method="post" class="mt-4 form-record" >
						<div class="row">

							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="firstname" class="form-control " required placeholder="Enter your first name">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" name="lastname" class="form-control " required placeholder="Enter your last name">
								</div>
							</div>

						</div>


						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" required class="form-control " placeholder="Enter your email address">
						</div>


						<div class="form-group">
							<label>Subject</label>
							<input type="text" name="subject" required class="form-control " placeholder="Enter your email subject">
						</div>

						<div class="form-group">
							<label>How can we help you?</label>
							<textarea class="form-control" required name="message" rows="5" placeholder="Enter your message..."></textarea>
						</div>

						<div class="form-group">
							<button class="btn btn btn-lg text-white btn-block" name="submit" type="submit" style="background:<?=APP_COLOR ?>; font-size: 15px;">
								Send Us A Message
							</button>
						</div>
					</form>
				</div>

				
			</div>
		</div>
	</section>
	




	<?php  $allow_section_four=true;?>
	<?php require_once "layout/footer.php"; ?>


	<script src="<?=BURL?>asset/js/bootstrap-five.bundle.min.js"></script>
	<script src="<?=BURL?>asset/js/bootstrap-four.bundle.min.js"></script>
	<script src="<?=BURL?>asset/js/owl.carousel.min.js"></script>
	<script src="<?=BURL?>asset/js/scrollreveal.min.js"></script>
	<script src="<?=BURL?>asset/js/sweetalert2.min.js"></script>


	<script>
		$(".form-record").on("submit",function(event){
			event.preventDefault();
			let form_data= new FormData(this);
			$.ajax({
				url:"contact",
				method:"POST",
				processData: false,
				contentType: false,
				data:form_data,
				beforeSend:function(){
					Swal.fire({
					  title: `Please wait...`,
					  text: `Please wait while the system processes your request.`,
					  allowOutsideClick: false,
					  allowEscapeKey: false,
					  didOpen: () => Swal.showLoading()
					});
				},
				success:function(response){
					Swal.fire({
					  title: `Request Completed Successfully`,
					  text: `${response}`,
					});
				}
			})
		})
	</script>
	<script>
	  ScrollReveal().reveal('.banner-top-text-animation', {
	    duration: 2000,
	    origin: 'top',
	    distance: '10px',
	    easing: 'ease-in-out',
	    viewFactor: 0.3,
	    reset: true
	  });


	  ScrollReveal().reveal('.banner-bottom-text-animation', {
	    duration: 5000,
	    origin: 'bottom',
	    distance: '10px',
	    easing: 'ease-in-out',
	    viewFactor: 0.3,
	    reset: true
	  });
	</script>

	<script>
	  $(".back-to-top").click(function() {
	    $("html, body").animate({
	      scrollTop: 0
	    }, 1000); // 1000ms = 1 second
	  });
	</script>

</body>
</html>