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

	<title>Our Services | <?=APP_NAME ?></title>
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
			background-image: url("<?=BURL ?>storage/our-services.png");
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

		.section_one .display-6{
			font-size: 29px;
			margin-top: 30px;
		}

		.section_one .who-we-are-btn{
			border: 1px solid  <?=APP_COLOR ?>; 
			border-radius:50px;
			color:<?=APP_COLOR ?>;
			font-size: 10px!important;
		}

		

		.section_two{
			padding-inline: 16px;
			padding-top: 40px;
		}
		.section_two .who-we-are-btn{
			border: 1px solid  <?=APP_COLOR ?>; 
			border-radius:50px;
			color:<?=APP_COLOR ?>;
			font-size: 10px!important;
		}


		.section_two .btn-block{
			background-color:<?=APP_COLOR ?>!important;
			color: white;
		}
		@media(max-width:768px){
			.banner-image{
				background-image: url("<?=BURL ?>storage/about-page-banner.png");
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
		}
	</style>

	<?php require_once "layout/navbar.php"; ?>

	<section class="banner-image">
		<div class="container banner-text">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="banner-top-text-animation ">
						<h1 class="display-6 fw-bold text-white" align="center">
							Reliable Cars. Transparent Service.<br><span style="color:<?=SECOND_COLOR ?>;">Stellar Experience.</span>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</section>








	<!-- Section one -->
	<section style="padding-top: 50px;" class="section_one">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<button class="btn-sm btn btn p-2 who-we-are-btn">
						STALLARPAT AUTOS
					</button>
					<h4 class="display-6 fw-bold">
						Empowering Growth Through Excellence
					</h4>
					<p class="mt-4">
						Stallarpat Autos is the automobile division of the Stallarpat Group. We offer end-to-end car  solutions from imports and fleet management to maintenance and sales.  
					</p>
					
					<p class="mt-4">
						We believe in putting people first. Every interaction with Stallarpat Autos is designed around trust, comfort, and long-term satisfaction. From your first inquiry to after-sales care, our goal is to make every client feel confident, informed, and valued
					</p>

				</div>



				<div class="col-md-6 mt-3">
					<img src="<?=BURL ?>storage/service-banner.png" width="100%" alt="service-banner" height="100%" class="banner-zoom-effect">
				</div>

				
			</div>
		</div>
	</section>
	



	<section style="margin-top:50px; background:#F1F1FF; padding-inline: 16px;" class="section_two">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1" align="center">
					<button class="btn-sm btn btn p-2  who-we-are-btn">
						WHAT WE OFFER
					</button>
					<h4 class="display-6 fw-bold mt-4">Our Comprehensive Services</h4>
					<p style="padding-top:16px;">
						At Stallarpat Autos, we go beyond selling cars we deliver complete automotive experiences that prioritize transparency, quality, and customer satisfaction. Our services are designed to meet every vehicle need with precision, professionalism, and care.
					</p>
				</div>
			</div>



			<div class="row mt-5">

				<!-- Vehicle Sales & Management -->
				<div class="col-md-6 mt-5">
					<img src="<?=BURL ?>storage/vechicle_sales_import.png" width="100%" alt="vechicle_sales_import" >

					<div class="mt-3 ">
						<h5 class="fw-bold">Vehicle Sales & Management</h5>
						<p style="padding-top:16px;">
							Access a premium selection of verified vehicles imported from trusted global sources. Whether you’re buying brand-new or pre-owned, we ensure every car meets our strict standards for quality, reliability, and value.
						</p>

						<a href="<?=BURL ?>contact" class="btn btn btn-block mt-4">
							Send Us A Message
						</a>
					</div>

				</div>



				<!-- Fleet Management Solutions -->
				<div class="col-md-6 mt-5">
					<img src="<?=BURL ?>storage/fleet_management_service.png"  width="100%" alt="fleet_management_service">

					<div class="mt-3 ">
						<h5 class="fw-bold">Fleet Management Solutions</h5>
						<p style="padding-top:16px;">
							Streamline your business operations with our smart fleet management services. We help companies maintain, track, and optimize their vehicle usage saving time, reducing costs, and boosting performance.
						</p>

						<a href="<?=BURL ?>contact" class="btn btn btn-block mt-4">
							Send Us A Message
						</a>
					</div>

				</div>
			</div>


			<div class="row">

				<!-- Car Maintenance & Repairs -->
				<div class="col-md-6 mt-5">
					<img src="<?=BURL ?>storage/car_maintainance.png"  width="100%" alt="car_maintainance">

					<div class="mt-3 ">
						<h5 class="fw-bold">Car Maintenance & Repairs</h5>
						<p style="padding-top:16px;">
							Keep your vehicles running like new with our professional maintenance and repair services. From routine servicing to complex mechanical work, our skilled technicians ensure safety, efficiency, and long-term performance.
						</p>

						<a href="<?=BURL ?>contact" class="btn btn btn-block mt-4">
							Send Us A Message
						</a>
					</div>

				</div>



				<!-- Vehicle Documentation Assistance -->
				<div class="col-md-6 mt-5">
					<img src="<?=BURL ?>storage/vechicle_documentation.png"  width="100%" alt="vechicle_documentation">

					<div class="mt-3 ">
						<h5 class="fw-bold">Vehicle Documentation Assistance</h5>
						<p style="padding-top:16px;">
							Skip the stress of paperwork. We handle all aspects of vehicle documentation from registration and insurance to verification and renewals with transparency and efficiency.
						</p>

						<a href="<?=BURL ?>contact" class="btn btn btn-block mt-5">
							Send Us A Message
						</a>
					</div>

				</div>
			</div>


		</div>

	</section>


	<?php require_once __DIR__."/layout/home/section_five.php"; ?>
	<?php require_once "layout/footer.php"; ?>


	<script src="<?=BURL?>asset/js/bootstrap-five.bundle.min.js"></script>
	<script src="<?=BURL?>asset/js/bootstrap-four.bundle.min.js"></script>
	<script src="<?=BURL?>asset/js/owl.carousel.min.js"></script>
	<script src="<?=BURL?>asset/js/scrollreveal.min.js"></script>
	<script src="<?=BURL?>asset/js/sweetalert2.min.js"></script>

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