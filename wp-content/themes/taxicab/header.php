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
    <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/site logo.png" class="img-fluid"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 gap-5 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
       </ul>
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
