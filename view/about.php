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

	<title>About Us | <?=APP_NAME ?></title>
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
			background-image: url("<?=BURL ?>storage/about-page-banner.png");
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


		.section_one .our-mission{
			display: flex;
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

			.section_one .our-mission{
				overflow-x: scroll!important;
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
							Creating Opportunities <br><span style="color:<?=SECOND_COLOR ?>;">Across Industries</span>
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
						ABOUT STALLARPAT
					</button>
					<h4 class="display-6 fw-bold">
						Redefining Business Excellence
					</h4>
					<p class="mt-4">
						<?=APP_NAME ?> was founded with a vision to redefine how people experience business by creating companies that deliver value, innovation, and trust.
					</p>
					
					<p class="mt-4">
						Our journey began with <?=APP_NAME ?> Autos, providing customers with a transparent and dependable automobile experience from vehicle sourcing and inspection to after-sales care.
					</p>


					<p class="mt-4">
						As we grow, we're expanding into new sectors that share one common goal: to simplify lives and set new standards of excellence.
					</p>


					<div class="our-mission mt-3" style="width:100%;">
						<img src="<?=BURL ?>storage/integrity-about.png" width="35" height='35' alt="integrity-about">
						<div class="ml-2" style="width:100%;">
							<h5 style="font-size: 15px;">Integrity</h5>
							<p class="text-muted" style="font-size:12px;">
								We build trust through transparency and consistency.
							</p>
						</div>
					</div>

					<div class="our-mission mt-3" style="width:100%;">
						<img src="<?=BURL ?>storage/innovation.png" width="35" height='35' alt="trust-and-transparency">
						<div class="ml-2" style="width:100%;">
							<h5 style="font-size: 15px;">Innovation</h5>
							<p class="text-muted" style="font-size:12px;">
								We think ahead, creating smart solutions for today’s world.
							</p>
						</div>
					</div>


					<div class="our-mission mt-3">
						<img src="<?=BURL ?>storage/customer-support.png" width="35" height='35' alt="trust-and-transparency">
						<div class="ml-2" style="width:100%;">
							<h5 style="font-size: 15px;">Customer Focus</h5>
							<p class="text-muted" style="font-size:12px;">
								Every decision revolves around the people we serve.
							</p>
						</div>
					</div>


					<div class="our-mission mt-3">
						<img src="<?=BURL ?>storage/about-excellence.png" width="35" height='35' alt="about-excellence">
						<div class="ml-2" style="width:100%;">
							<h5 style="font-size: 15px;">Excellence</h5>
							<p class="text-muted" style="font-size:12px;">
								Good isn’t enough; we aim for stellar.
							</p>
						</div>
					</div>

				</div>



				<div class="col-md-6 mt-5">
					<img src="<?=BURL ?>storage/truth-banner.png" width="100%" alt="truth-banner" class="banner-zoom-effect">
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

	  $(".banner-zoom-effect").on("mouseenter", function () {
	    $(this).css({
	      transition: "transform 0.5s ease",
	      transform: "scale(1.1)"
	    });
	  });

	  $(".banner-zoom-effect").on("mouseleave", function () {
	    $(this).css({
	      transform: "scale(1)"
	    });
	  });


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