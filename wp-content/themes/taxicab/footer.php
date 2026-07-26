<section class="footer">
  <div class="container">
  <div class="row g-4">

    <!-- ABOUT -->
    <div class="col-12 col-md-6 col-lg-4">
      <h2 class="FTXT mb-3"><?php
echo esc_html(
    get_theme_mod(
        'footer_about_title',
        'ABOUT US'
    )
);
?>
</h2>

      <p class="ftxtp">
      <?php
echo esc_html(
    get_theme_mod(
        'footer_about_text'
    )
);
?>
      </p>

      <div class="social-footer mt-3">

       <?php if(get_theme_mod('facebook_url')): ?>

<a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank">
<i class="fa-brands fa-facebook-f"></i>
</a>

<?php endif; ?>

<?php if(get_theme_mod('twitter_url')): ?>

<a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank">
<i class="fa-brands fa-twitter"></i>
</a>

<?php endif; ?>

<?php if(get_theme_mod('instagram_url')): ?>

<a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" target="_blank">
<i class="fa-brands fa-instagram"></i>
</a>

<?php endif; ?>

<?php if(get_theme_mod('linkedin_url')): ?>

<a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>" target="_blank">
<i class="fa-brands fa-linkedin-in"></i>
</a>

<?php endif; ?>

      </div>
    </div>

    <!-- EXPLORE -->
    <div class="col-12 col-md-6 col-lg-5">

      <h2 class="extxt mb-4"><?php
echo esc_html(
    get_theme_mod(
        'footer_explore_title',
        'EXPLORE'
    )
);
?></h2>

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

      <h2 class="ctxt mb-3"><?php
echo esc_html(
    get_theme_mod(
        'footer_contact_title',
        'CONTACT US'
    )
);
?></h2>

      <p class="address mb-2">
        <strong class="address">Address:</strong>
       <?php
echo nl2br(
    esc_html(
        get_theme_mod(
            'footer_address'
        )
    )
);
?>
      </p>

      <p class="address mb-2">
        <i class="fa-solid fa-phone phone me-2"></i>
        <?php
echo esc_html(
    get_theme_mod(
        'footer_phone'
    )
);
?>
      </p>

      <p class="address mb-2">
        <i class="fa-solid fa-envelope envelope me-2"></i>
        <a
href="mailto:<?php echo esc_attr(get_theme_mod('footer_email')); ?>"
class="text-decoration-none emaillink">

<?php
echo esc_html(
    get_theme_mod(
        'footer_email'
    )
);
?>

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
        <p class="ftxt text-center "><span class="f2txt"></span>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <?php
echo esc_html(
    get_theme_mod(
        'footer_copyright',
        'All Rights Reserved.'
    )
);
?></p>
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