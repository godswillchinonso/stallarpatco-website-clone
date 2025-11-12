<style>
	.counter-container .d-flex-container{
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.counter-container .d-flex-container span, 
	.counter-container .d-flex-container .display-4{
		color:<?=APP_COLOR ?>;
	}
	@media(max-width:768px){
		.counter-container .d-flex-container{
			display: block;
		}
	}
</style>
<div class="container-fluid bg-light">
	<div class="row mt-5 counter-container ">
		<div class="col-md-12 py-5 rounded">
			
			<div class="counter-section d-flex-container px-5" align="center">

			  <div class="mt-5">
			  	<div class="mx-2 display-4 fw-bold"  >
			  		<span class="counter" data-target="100">0</span> %
			  		
			  	</div>
			  	<small class="">Professional Services</small>
			  </div>


			  <div class="mt-5">
			  	<div class="mx-2 display-4 fw-bold" >
			  		<span class="counter" data-target="100">0</span> %
			  		
			  	</div>
			  	<small >Customer Focused</small>
			  </div>


			  <div class="mt-5">
			  	<div class="mx-2 display-4 fw-bold" >
			  		<span class="counter" data-target="5">0</span> +
			  		
			  	</div>
			  	<small >Years of Experience</small>
			  </div>


			  <div class="mt-4">
			  	<img src="<?=BURL ?>storage/infinite.png" >
			  </div>
			</div>

		</div>
	</div>
</div>







<script>
	$(document).ready(function() {

	  $('.counter').each(function() {
	    var $this = $(this);
	    var waypoint = new Waypoint({
	      element: $this,
	      handler: function() {
	        var target = parseInt($this.attr('data-target'));
	        $({ countNum: 0 }).animate(
	          { countNum: target },
	          {
	            duration: 2000,
	            easing: 'swing',
	            step: function() {
	              $this.text(Math.floor(this.countNum));
	            },
	            complete: function() {
	              $this.text(this.countNum );
	            }
	          }
	        );
	        this.destroy(); // run once
	      },
	      offset: '80%' // triggers when 80% of the element is visible
	    });
	  });

	});

</script>