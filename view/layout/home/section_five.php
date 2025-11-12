<style>
	.section_five{
		padding-inline: 16px;
		margin-top: 50px;
	}
	
	.section_five .btn-one{
		background:<?=SECOND_COLOR ?>; 
	}


	.section_five .btn-two{
		margin-left: 20px; 
	}



	.section_five .btn-one, 
	.section_five .btn-two{

		transition: background 0.5s;
		padding: 15px;
		border-radius: 15px;
		font-size:15px;
	}


	

	.section_five .btn-one:hover{
		background: white!important;
	}



	.section_five .btn-two:hover{
		background: white!important;
		color: black!important;
	}


	@media(max-width:768px){
		.section_five .section_five{
			text-align: center;	
		}

		.section_five .btn-one{
			background:<?=SECOND_COLOR ?>; 
			width: 100%;
		}


		.section_five .btn-two{
			margin-left: 0px; 
			width: 100%;
		}


		.section_five .banner-zoom-effect{
			padding-top: 25px;
		}


		.section_five .banner-zoom-effect h5{
			font-size: 16px;
		}
	}
</style>

<section class="section_five" style="background:<?=APP_COLOR ?>;">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-6 mt-5 section_five">
				<h4 class="display-6 fw-bold">
					Ready to Experience <br> <span style="color:<?=SECOND_COLOR ?>;">Excellence?</span>
				</h4>
				<p class=" mt-2">
					Whether you're looking to buy a car, collaborate with us, or learn more about our upcoming ventures, we'd love to hear from you.
				</p>

				<div class="mt-4">
					<a href="<?=BURL ?>our-services" class="btn btn btn-lg btn-one mt-1 px-4">
						Explore Stallarpat Auto <i class="fas fa-arrow-right pl-2"></i>
					</a>

					<a href="<?=BURL ?>contact" class="btn btn btn-lg mt-1 btn-two border border-white text-white px-4">
						Contact Us
					</a>
				</div>
			</div>


			<div class="col-md-6 mt-3 banner-zoom-effect">
				<div class="card bg-dark text-white">
				  <img src="<?=BURL?>storage/professional-service.png" class="card-img " alt="professional-service.png" width="100%">
				  <div class="card-img-overlay d-flex align-items-end justify-content-center">
				    <div class="bg-light px-4 py-2 text-center" style="border-radius:10px;">
				      <h5 class="text-dark">Professional Service</h5>
				      <p class="card-text text-muted" style="font-size:14px;">Expert team dedicated to your satisfaction</p>
				    </div>
				  </div>

				</div>
			</div>
		</div>
	</div>
</section>