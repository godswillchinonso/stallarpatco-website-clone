<style>

	

	footer {
	  position: relative;
	  width: 100%;
	  height: 100%;

	}

	footer .footer-bg {
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  background-image: url("<?=BURL ?>storage/footer.png");
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	  /* Dark overlay */
	  background-color: rgba(0,0,0,0.8);
	  background-blend-mode: darken;
	  z-index: 1;

	}

	footer .container-fluid {
	  position: relative;
	  z-index: 2; /* ensures text and logo sit above overlay */
	  padding-bottom: 150px!important;
	}

	footer .container-fluid .d-flex{
		justify-content: space-between;
	}

	footer .container-fluid .d-flex a{
		transition: color 0.5s;
	}
	footer .container-fluid .d-flex a:hover{
		color:white!important;

	}

	footer .container-fluid .d-flex .fas{
		color: <?=SECOND_COLOR ?>;
	}
	@media(max-width:768px){
			footer .container-fluid .d-flex{
			display: block!important;
		}
	}
</style>





















<footer>
  <div class="footer-bg"></div>
  <div class="container-fluid p-5 position-relative">
    <div class="d-flex" >

      <div style="margin-top:80px;" >
        <img src="<?=APP_LOGO ?>" alt="logo" width="200">
        <p class="text-white">Building Excellence. Driving Trust.</p>

        <div  class="mt-3">
        	<a href="" class="bg-white p-1 mx-2" style="border-radius:5px;">
        		<i class="fab fa-facebook text-dark"></i>
        	</a>

        	<a href="" class="bg-white p-1 mx-2" style="border-radius:5px;">
        		<i class="fab fa-instagram text-dark"></i>
        	</a>

        </div>

      </div>


      <!-- quick link -->
      <div style="margin-top:80px;">
      	<h5 class="text-white">Quick Links</h5>
      	<ul class="list-unstyled">
      		<li class="mt-3">
      			<a href="<?=BURL ?>" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-chevron-right"></i> Home
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="<?=BURL ?>about" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-chevron-right"></i> About Us
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="<?=BURL ?>our-services" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-chevron-right"></i> Stallarpat Autos
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="<?=BURL ?>contact" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-chevron-right"></i> Contact Us
      			</a>
      		</li>
      	</ul>
      </div>



      <!--Our Services-->
      <div style="margin-top:80px;">
      	<h5 class="text-white">Our Services</h5>
      	<ul class="list-unstyled">
      		<li class="mt-3">
      			<a href="<?=BURL ?>our-services" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-check"></i> Vehicle Sales & Imports
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="<?=BURL ?>our-services" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-check"></i> Fleet Management
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="<?=BURL ?>our-services" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-check"></i> Maintenance & Repairs
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="<?=BURL ?>our-services" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-check"></i> Documentation Assistance
      			</a>
      		</li>
      	</ul>
      </div>



      <!--Get in Touch-->
      <div style="margin-top:80px;">
      	<h5 class="text-white">Get in Touch</h5>
      	<ul class="list-unstyled">
      		<li class="mt-3">
      			<a href="" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-map-marker-alt" ></i> 22 Oluwatosin Adewuyi Street Lagos Nigeria
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="tel:+2349126423431" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-phone" ></i> +2349126423431
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="mailto:info@stallarpatcoltd.com" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-envelope" ></i> info@stallarpatcoltd.com
      			</a>
      		</li>

      		<li class="mt-3">
      			<a href="" style="color:<?=APP_COLOR ?>;">
      				<i class="fas fa-clock" ></i> Mon-Sat: 9:00 AM - 6:00 PM
      			</a>
      		</li>
      	</ul>
      </div>

    </div>



    
  </div>

  <div class="text-center" style="margin-top: 50px; padding-top: 20px; position: relative; z-index: 3;">
    <p class="text-white mb-0">&copy; <?=date("Y") ?> Stallarpat Group. All Rights Reserved</p>
  </div>

</footer>


<div class="fixed-bottom p-5 mt-5" align="right">
	<a class="btn btn-sm back-to-top" style="background:<?=SECOND_COLOR ?>;">
		<i class="fas fa-arrow-up"></i>
	</a>
</div>
