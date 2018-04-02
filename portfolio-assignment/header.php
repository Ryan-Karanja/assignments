<?php
/**
 * My Portfolio header.php
 * This is the reusable header for my site
 * @version 0.0.1
 * +----------------------------------------------------------------------+
 * bloginfo()
 * +----------------------------------------------------------------------+
 * wp_head()
 * +----------------------------------------------------------------------+
 * wp_title()
 * +----------------------------------------------------------------------+
 * get_template_part()
 * +----------------------------------------------------------------------+
 * language_attributes()
 * +----------------------------------------------------------------------+
 */
?><!DOCTYPE html>
<html <?php _________________________ ; // Print the language attributes for the website ?>>
  <head>
    <!-- Required meta tags -->
      <meta charset="<?php _______________________ ; // The Charset ?>">
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- My linked styles -->
    <?php _______________ ; // Links from functions.php are included here ?>

    <title><?php _________________________ ; // Print the title-tag ?></title>
  </head>

  <body>
    <div class="nav-wrap">
      <nav class="container">
        <?php _______________________________________________________ ; // include the primary-nav.php file ?>
      </nav>
    </div>
    <header class="container">
      <h1>
        <a href="<?php _____________________________ ; // Print the home page URL ?>">
          <?php ____________________________ ; // Print the name of your website ?>
        </a>
      </h1>
      <small class="tagline">
        <?php _____________________________ ; // Print the description of the website ?>
      </small>
    </header>
