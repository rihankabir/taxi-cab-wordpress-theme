<section class="footer">
  <div class="container">
  <div class="row g-4">

    <!-- ABOUT -->
    <div class="col-12 col-md-6 col-lg-4">
      <h2 class="FTXT mb-3">ABOUT US</h2>

      <p class="ftxtp">
        Trusted by thousands of passengers, our taxi service delivers dependable transportation with a focus on safety, comfort, and efficiency.
      </p>

      <div class="social-footer mt-3">

        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

      </div>
    </div>

    <!-- EXPLORE -->
    <div class="col-12 col-md-6 col-lg-5">

      <h2 class="extxt mb-4">EXPLORE</h2>

      <div class="row">

        <div class="col-6">

          <?php 
          wp_nav_menu(
              array(
        'theme_location' => 'footer_menu_1',
        'container'      => false,
        'menu_class'     => 'nav flex-column',
        'fallback_cb'    => false,
    )
          );
          
          
          ?>

        </div>

        <div class="col-6">
          <?php
wp_nav_menu(
    array(
        'theme_location' => 'footer_menu_2',
        'container'      => false,
        'menu_class'     => 'nav flex-column',
        'fallback_cb'    => false,
    )
);
?>
        </div>

      </div>

    </div>

    <!-- CONTACT -->
    <div class="col-12 col-md-12 col-lg-3">

      <h2 class="ctxt mb-3">CONTACT US</h2>

      <p class="address mb-2">
        <strong class="address">Address:</strong>
        56/Taylor Road, London, United Kingdom
      </p>

      <p class="address mb-2">
        <i class="fa-solid fa-phone phone me-2"></i>
        +44 20 7946 0123
      </p>

      <p class="address mb-2">
        <i class="fa-solid fa-envelope envelope me-2"></i>
        <a href="#" class="text-decoration-none emaillink">
          gettaxi@taxicab.co.uk
        </a>
      </p>

    </div>

  </div>
</div>
  
</section>
<!--footer section ends-->
<!--bottom footer section starts-->
<section class="bottom-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p class="ftxt text-center "><span class="f2txt"></span>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?> . All Rights Reserved.</p>
      </div>
    </div>
  </div>
</section>


<div id="loader">
    <div class="spinner"></div>
</div>

<!--bottom footer section ends-->




    <?php wp_footer(); ?>
    </body>
</html>