<style>
	.section_one{
		padding-top: 50px;
		padding-inline: 16px;
	}

	.section_one .section_one_text .display-6{
		font-size: 29px;
		margin-top: 30px;
	}

	.section_one .section_one_text p{
		padding-top: 16px;
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
		.section_one .section_one_text{
			padding-top: 100px;
		}

		.section_one .section_one_text h4{
			font-size: 25px;
		}
		.section_one .section_one_text p{
			padding-top: 10px;
		}
		.section_one .our-mission{
			overflow-x: scroll!important;
			padding-top: 10px;
		}
	}
</style>


<!-- Section one -->
<section class="section_one">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?=BURL ?>storage/section_one.png" width="100%" alt="We're Not Just Building Businesses, We're Building Paths to Excellence" class="banner-zoom-effect">
			</div>

			<div class="col-md-6 section_one_text">
				<div align="center">
					<button class="btn-sm btn btn p-2 who-we-are-btn">
						WHO ARE WE
					</button>
				</div>

				<h4 class="display-6 fw-bold">
					We're Not Just Building Businesses, <br>
					<span style="color:<?=SECOND_COLOR ?>;">We're Building Paths to Excellence</span>
				</h4>

				<p>
					At <?=APP_NAME ?>, our mission is to create diverse, impactful ventures that simplify everyday experiences. From automobiles to lifestyle solutions, we're passionate about quality, trust, and innovation.
				</p>



				<!-- Trust & Transparency -->
				<div class="our-mission mt-3" style="width:100%;">
					<img src="<?=BURL ?>storage/trust.png" width="35" height='35' alt="trust-and-transparency">

					<div class="ml-2" style="width:100%;">
						<h5 style="font-size: 15px;">Trust & Transparency</h5>
						<p class="text-muted" style="font-size:12px;">
							Every decision revolves around delivering honest, transparent service
						</p>
					</div>

				</div>


				<!-- Innovation & Excellence -->
				<div class="our-mission mt-3" style="width:100%;">
					<img src="<?=BURL ?>storage/innovation.png" width="35" height='35' alt="trust-and-transparency">

					<div class="ml-2" style="width:100%;">
						<h5 style="font-size: 15px;">Innovation & Excellence</h5>
						<p class="text-muted" style="font-size:12px;">
							We think ahead, creating smart solutions for today's world
						</p>
					</div>

				</div>


				<!-- Customer-Focused -->
				<div class="our-mission mt-3" style="width:100%;">
					<img src="<?=BURL ?>storage/customer-support.png" width="35" height='35' alt="trust-and-transparency">

					<div class="ml-2" style="width:100%;">
						<h5 style="font-size: 15px;">Customer-Focused</h5>
						<p class="text-muted" style="font-size:12px;">
							The people we serve are at the heart of everything we do
						</p>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>