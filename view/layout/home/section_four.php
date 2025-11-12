
<style>
	.section_four{
		padding-inline: 16px;
	}
	
	.section_four .our-foundation{
		border: 1px solid  <?=APP_COLOR ?>; 
		border-radius:50px;
		color:<?=APP_COLOR ?>;
		font-size: 10px!important;
	}
	
	.section_four .d-flex-container{
		display:flex;
		justify-content: space-between;
		align-items: center;
	}
	@media(max-width:768px){
		

		.section_four .d-flex-container{
			display:block;
		}

		.section_four .d-flex-container div{
			margin-top: 16px;
		}
	}
</style>

<!-- section three -->
<section style="margin-top:50px;" class="section_four">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2" align="center">
				<button class="btn-sm btn btn p-2 our-foundation">
					OUR FOUNDATION
				</button>
				<h4 class="display-6 fw-bold">
					Built on Values That <br> <span style="color:<?=SECOND_COLOR ?>;">Drive Excellence
				</h4>
				<p class="pt-3">
					Every venture we create is guided by principles that ensure quality, trust, and impact in everything we do.
				</p>
			</div>
		</div>


		<div class="d-flex-container">
			<div>
				<img src="<?=BURL ?>storage/integrity_010.png" alt="integrity.png" width="100%" height="100%">
			</div>

			<div>
				<img src="<?=BURL ?>storage/innovation010.png" alt="innovation010.png" width="100%" height="100%">
			</div>

			<div>
				<img src="<?=BURL ?>storage/customer_focus010.png" alt="customer_focus010.png" width="100%" height="100%">
			</div>

			<div>
				<img src="<?=BURL ?>storage/excellence010.png" alt="excellence010.png" width="100%" height="100%">
			</div>

		</div>
	</div>
</section>