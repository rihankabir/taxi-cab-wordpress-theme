<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAXI CAB</title>

  <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>


  <!--loader-->
  
  
<!--loader end-->
<!-- =========================
     TOP HEADER START
========================= -->

<div class="top-header">

    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT SIDE -->
            <div class="col-lg-6">

                <div class="top-contact">

                    <a href="#">
                        <i class="fa-solid fa-phone"></i>
                         +44 20 7946 0123
                    </a>

                    <a href="#">
                        <i class="fa-solid fa-envelope"></i>
                        gettaxi@taxicab.co.uk
                    </a>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-6 text-lg-end">

                <div class="top-social">

                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =========================
     TOP HEADER END
========================= -->
<!--navbar start-->
<nav class="navbar navbar-expand-lg  custom-navbar sticky-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
    <?php 
    if(has_custom_logo()){
the_custom_logo();
    } else {
?> 
<h1><?php bloginfo( 'name' ); ?></h1>

<?php } ?>

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php 
      wp_nav_menu(
array(
    'theme_location'=>'primary_menu',
    'container'=>false,
    'menu_class'=>'navbar-nav ms-auto mb-2 gap-5 mb-lg-0',
    'fallback_cb'=> false,
)

      );
      ?>
          <!-- RIGHT SIDE -->
            <div class="nav-right d-flex ms-auto  align-items-center gap-3">

                <!-- SEARCH ICON -->
 <a href="#" class="search-icon" id="searchToggle">
    <i class="fa-solid fa-magnifying-glass"></i>
</a>

<div class="search-box" id="searchBox">
    <input type="text" id="searchInput" placeholder="Search..." />
</div>
                <!-- BOOK BUTTON -->
                <a href="contact.html" class="book-btn">

                    Book Now

                </a>

            </div>
    </div>
  </div>
</nav>
