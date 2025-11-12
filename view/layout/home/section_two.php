
<style>
	.section_two {
		padding-top: 50px; 
		background:#F1F1FF;
		padding-inline: 16px;
	}


	.section_two .our-business{
		border: 1px solid  <?=APP_COLOR ?>; 
		border-radius:50px;
		color:<?=APP_COLOR ?>;
		font-size: 10px!important;
	}

	.section_two  .card-body{
		box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		border-radius: 10px;
		height: 250px;
	}

	.section_two .card-body .image-container{}

	.section_two .card-body .image-container img{
		width: 50px;
	}
</style>


<section class="section_two py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2" align="center">
				<button class="btn-sm btn btn p-2 our-business">
					OUR BUSINESS
				</button>
				<h4 class="display-6 fw-bold">Stallarpat Autos</h4>
				<p style="padding-top:16px;">
					Our automobile division provides reliable vehicle sales, imports, fleet management, and maintenance services. Whether you're an individual buyer or a corporate client, Stallarpat Autos delivers a seamless, transparent, and customer-focused experience.
				</p>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12" style="margin-top:40px;">

				<div class="owl-carousel owl-theme section_two_carousel">

					<div class="item">

						<div class="card card-body bg-white mt-2 mx-2" style="width:100%">
							<div class="image-container">
								<img src="<?=BURL ?>storage/vehicle-sales.png"  alt="Vehicle Sales & Imports">
							</div>
							

							<h5 style="font-size:18px;" class="mt-3">Vehicle Sales & <br> Imports</h5>
							<p class="text-muted mt-2" style="font-size:14px;">
								Access a wide range of high-quality vehicles imported and verified for reliability
							</p>

						</div>
					</div>

					<div class="item">
						<div class="card card-body bg-white mt-2 mx-2" style="width:100%">
							<div class="image-container">
								<img src="<?=BURL ?>storage/fleet-management.png" alt="Fleet Management">
							</div>
							

							<h5 style="font-size:18px;" class="mt-3">Fleet Management</h5>
							<p class="text-muted mt-2" style="font-size:14px;">
								We help business manage vehicle operations efficiently, reducing downtime and cost
							</p>

						</div>
					</div>


					<div class="item">
						<div class="card card-body bg-white mt-2 mx-2 pb-5" style="width:100%">
							<div class="image-container">
								<img src="<?=BURL ?>storage/repair.png"  alt="Maintenance & Repairs">
							</div>
							

							<h5 style="font-size:18px;" class="mt-3">Maintenance & Repairs</h5>
							<p class="text-muted mt-2" style="font-size:14px;">
								Professional maintenance service that keep your vehicles running at their best
							</p>

						</div>
					</div>


					<div class="card card-body bg-white mt-2 mx-2 pb-5" style="width:100%">
						<div class="image-container">
							<img src="<?=BURL ?>storage/documentation.png" alt="Documentation Assistance">
						</div>
						

						<h5 style="font-size:18px;" class="mt-3">Documentation Assistance</h5>
						<p class="text-muted mt-2" style="font-size:14px;">
							We handle your paperwork, registration, and verification with ease and transparency
						</p>

					</div>

				</div>
			</div>
		</div>

		
	</div>

</section>






<script>
	$('.section_two_carousel').owlCarousel({
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
	            items:4
	        }
	    }
	})
</script>