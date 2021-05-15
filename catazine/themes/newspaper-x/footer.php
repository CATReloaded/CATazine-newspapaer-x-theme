<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newspaper X
 * 
 * Add CAT website footer 
 * by: Nahla Galal
 */

?>
</div>
  <!-- Start Footer -->
  <footer class="wide-container Footer">
    <!-- About CAT part -->
    <div class="Footer__about-CAT">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/full-logo.svg" alt="CAT Reloaded logo">
      <p>"CAT" is a non-profit foundation focused on Computer Science and IT specially Open Source technologies</p>
    </div>
    <!-- Discover team part -->
    <div class="Footer__discover-team">
      <h2>Discover Our Team</h2>
      <ul>
        <li><a href="https://www.catreloaded.org/">Home</a></li>
        <li><a href="https://www.catreloaded.org/about">About</a></li>
        <li><a href="/CATazine">CATazine</a></li>
        <li><a href="https://www.catreloaded.org/events">Events</a></li>
        <li><a href="https://www.catreloaded.org/members">Members</a></li>
        <li><a href="https://www.catreloaded.org/rewards">Hall Of Fame</a></li>
      </ul>
    </div>
    <!-- Location part -->
    <div class="Footer__location">
      <h2>Location</h2>
      <p>Faculty of Engineering, Mansoura University, Mansoura, Egypt</p>
    </div>
    <!-- Social media part -->
    <div class="Footer__contact">
      <h2>Contact Us</h2>
      <ul>
        <li><a href="https://www.facebook.com/CATReloaded"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook page"></a>
        </li>
        <li><a href="https://twitter.com/CATReloaded"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Twitter account"></a></li>
        <li><a href="https://www.instagram.com/catreloaded/?hl=en"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg"
              alt="Instagram account"></a></li>
        <li><a href="https://www.youtube.com/channel/UCJaNoxBopnEOli2mI7PTlgg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg"
              alt="Youtube channel"></a></li>
        <li><a href="https://www.linkedin.com/company/cat-reloaded/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg"
              alt="Linkedin profile"></a></li>
        <li class="github"><a href="https://github.com/CATReloaded"></a></li>
        <li><a href="mailto:catreloaded.support@catreloaded.net"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/google+.svg"
              alt="Google+ mail"></a></li>
      </ul>
    </div>
    <!-- Copyrights -->
    <p>&copy; Copyright 2020<a href="#">Privacy</a><a href="#">Terms</a><a href="#">FAQ</a></p>
  </footer>
  <!-- End Footer -->
</div>
</body>
</html>
