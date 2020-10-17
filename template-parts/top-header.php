<?php
/**
 * Template part for displaying top header part
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Newspaper X
 * 
 * Add CAT website Navbar
 * by: Nahla Galal
 */
?>

<nav class="wide-container Navbar">
    <!-- Logo -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="CAT Reloaded logo">
    <!-- Navigation items -->
    <ul>
      <li><a href="/home.html">Home</a></li>
      <li class="active"><a href="/CATazine">CATazine</a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/events">Hall Of Fame</a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/members">Members</a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/rewards">Rewards</a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/about">About Us</a></li>
    </ul>
    <!-- Navigation hamburger menu for responsive -->
    <button class="Navbar__hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>
  <!-- End Navbar -->
