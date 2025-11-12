<style scoped>

  .fixed-top .navbar-brand{
    margin-left: 100px;
  }


  .fixed-top .nav-item .nav-link{
    font-size: 14px;
    padding-inline: 20px;
  }


  .fixed-top .nav-item .nav-link.active{
    color: <?=APP_COLOR ?> !important;
    border-radius: 8px;
    font-weight: bolder;
    text-decoration: underline;
  }

  

  .scroll-indicator{
    background: white;
    height: 10px;
    position: fixed;
    z-index: 9;
    top: 80px;
    width: 100%;
  }

  .progress-bar {
    height: 10px;
    width: 0%;
    background:<?=SECOND_COLOR ?>; /* green indicator */
  }


  @media(max-width: 768px){
    .fixed-top .navbar-brand{
      margin-left: 10px;
    }
  }
</style>


<nav class="navbar navbar-expand-md bg-white fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?=APP_LOGO ?>" width="200">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" style="margin-right: 100px;" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link  <?= ($current_page == 'home' ? 'active' : '') ?>" href="<?=BURL?>home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($current_page=='about' ? 'active' : '') ?>" href="<?=BURL?>about">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?=($current_page=='our-services' ? 'active' : '') ?>" href="<?=BURL?>our-services">Our Businesses</a>
      </li>


      


      <li class="nav-item ">
        <a class="nav-link <?=($current_page=='contact' ? 'active' : '') ?>" href="<?=BURL ?>contact">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="scroll-indicator fixed-top">
  <div class="progress-bar" id="progressBar"></div>
</div>




<script>
  // jQuery Scroll Indicator
  $(window).on("scroll", function () {
    let scrollTop = $(window).scrollTop();                      // how far scrolled
    let docHeight = $(document).height();                       // total page height
    let winHeight = $(window).height();                         // window height
    let scrolled = (scrollTop / (docHeight - winHeight)) * 100; // percentage
    $(".progress-bar").css("width", scrolled + "%");            // set bar width
  });

</script>
