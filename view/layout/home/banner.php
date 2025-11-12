<style>

	.banner-image{
		margin-top: 50px;

	}

	.banner-image img{
		height: 100%
		width: 100%;
	}

	.banner-image .container {
	  position: absolute;
	  top: 25%;
	  left: 5%;
	  z-index: 130;
	  color: white;
	  padding-inline: 100px;
	}

	.banner-image .container .banner-image-text h1{
		font-size: 40px;
	}
	.banner-image .container .banner-image-text p{
		padding-top: 17px;
	}


	.banner-image .container .banner-image-btn{
		padding-top: 40px;
	}



	.banner-image .container .banner-image-btn .btn-two{
		background:transparent;
		margin-left: 20px; 
		font-size:15px;
		padding: 15px;
		border-radius: 15px;
		color: white;
	}



	.banner-image .container .banner-image-btn .btn-one{
		background:<?=SECOND_COLOR ?>; 
		font-size:15px;
		padding: 15px;
		border-radius: 15px;
	}


	@media(max-width:768px){
		
		.banner-image img{
			height: 420px;
			width: 100%;
		}

		.banner-image .container {
		  position: absolute;
		  top: 20%;
		  left: 0;
		  z-index: 130;
		  color: white;
		  padding-inline: 20px;
		  text-align: center;
		}

		.banner-image .container .banner-image-text h1{
			font-size: 20px;
		}

		.banner-image .container .banner-image-text p{
			padding-top: 10px;
		}

		.banner-image .container .banner-image-btn .btn-two{
			background:transparent;
			margin-left: 0px; 
			font-size:15px;
			padding: 10px;
			border-radius: 15px;
			color: white;
			width: 100%;
		}

		.banner-image .container .banner-image-btn{
			padding-top: 15px;
		}


		.banner-image .container .banner-image-btn .btn-one{
			background:<?=SECOND_COLOR ?>; 
			font-size:15px;
			padding: 10px;
			border-radius: 15px;
			width: 100%;
		}
	}
</style>



<section class="banner-image">


	<div class="owl-carousel owl-theme bananer-owl-carousel-slide">

		<div class="item">
			<img src="<?=BURL ?>storage/banner_one.png" class="d-block w-100" alt="..." width="100%" >

			<div class="container">
				<div class="row">
					<div class="col-md-7">

						<div class="banner-image-text ">
							<h1 class="display-5 fw-bold text-white">
								Delivering Complete <br><span style="color:<?=SECOND_COLOR ?>;"> Automotive Solutions.</span>
							</h1>
							<p class="text-white">
								Leading the way in vehicle sales, fleet management, and automotive service with a vision for sustainable growth across multiple sectors.
							</p>
						</div>

						<div class="banner-image-btn">

							<a href="<?=BURL ?>our-services" class="btn btn btn-lg btn-one mt-1 ">
								Explore Stallarpat Auto
							</a>

							<a href="<?=BURL ?>contact" class="btn btn btn-lg mt-1 btn-two border border-white " >
								Contact Us
							</a>

						</div>
						
					</div>
				</div>
			</div>
		</div>

	    <div class="item ">
	    	<img src="<?=BURL ?>storage/banner_two.png" class="d-block w-100" alt="..."  width="100%">

	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-7">

	    				<div class="banner-image-text ">
	    					<h1 class="display-5 fw-bold text-white">
	    						Building Excellence. <br><span style="color:<?=SECOND_COLOR ?>;">Driving Trust.</span>
	    					</h1>
	    					<p class="text-white mt-2">
	    						<?=APP_NAME ?> is a forward-thinking company creating ventures that 
	    						shape the future starting with <?=APP_NAME ?> Autos, our automobile 
	    						division redefining vehicle ownership and management in Nigeria
	    					</p>
	    				</div>

	    				<div class="banner-image-btn">
	    					
	    					<a href="<?=BURL ?>our-services" class="btn btn btn-lg btn-one mt-1 " style="background:<?=SECOND_COLOR ?>; font-size:15px;">
	    						Explore <?=APP_NAME ?> Auto
	    					</a>

	    					<a href="<?=BURL ?>contact" class="btn btn btn-lg mt-1 btn-two border border-white " style="font-size:15px;">
	    						Contact Us
	    					</a>


	    				</div>
	    				
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>

</section>


<script>
	$('.bananer-owl-carousel-slide').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    autoplay:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})
</script>