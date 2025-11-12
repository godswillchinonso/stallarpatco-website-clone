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

	<script src="<?=BURL?>asset/js/owl.carousel.min.js"></script>
	<script src="<?=BURL?>asset/js/scrollreveal.min.js"></script>
	<script src="<?=BURL?>asset/js/sweetalert2.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<title>Welcome to <?=APP_NAME ?>  Companies Limited</title>
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
	</style>

	<?php require_once "layout/navbar.php"; ?>

	<?php require_once __DIR__."/layout/home/banner.php"; ?>

	<?php require_once __DIR__."/layout/home/section_one.php"; ?>
	<?php require_once __DIR__."/layout/home/section_two.php"; ?>
	<?php require_once __DIR__."/layout/home/section_three.php"; ?>
	<?php require_once __DIR__."/layout/home/section_four.php"; ?>
	
	<?php require_once __DIR__."/layout/home/countdown.php"; ?>
	<?php require_once __DIR__."/layout/home/section_five.php"; ?>
	


	



	<?php require_once "layout/footer.php"; ?>


	<script src="<?=BURL?>asset/js/bootstrap-five.bundle.min.js"></script>
	<script src="<?=BURL?>asset/js/bootstrap-four.bundle.min.js"></script>
	

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