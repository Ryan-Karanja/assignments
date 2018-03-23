<?php
/**
 * My Portfolio index.php
 * This is the default template for my theme
 * @version 0.0.1
 * +----------------------------------------------------------------------+
 * have_posts()
 * +----------------------------------------------------------------------+
 * the_post()
 * +----------------------------------------------------------------------+
 * get_template_part()
 * +----------------------------------------------------------------------+
 * previous_posts_link()
 * +----------------------------------------------------------------------+
 * next_posts_link()
 * +----------------------------------------------------------------------+
 * get_footer()
 * +----------------------------------------------------------------------+
 * get_header()
 * +----------------------------------------------------------------------+
 */

	// Include the header
  ________________;
?>
<main id="main"  class="container"  role="main">
		<?php
		// if there are posts
		if ( __________________ ) : ?>
			<?php
				// Start the Loop
				while ( _____________________ ) :
					// setup post data
					____________________; ?>
					<div class = "row">
						<div class="col"><!-- BS class -->
							<?php
								// include the content-excerpt template part
								_________________________________________________;
							?>
						</div>
					</div><!-- /.row-- >
			<?php
				endwhile;
			?>

    <!-- Add the pagination functions here. -->
    <div class="nav-previous">
    	<?php ____________________________; ?>
    </div>
    <div class="nav-next">
      <?php ____________________________; ?>
    </div>

  <?php
  	// no posts
  	else:
  		// include the content-none template
    	_______________________________________________;
		endif;
	?>
</main>
<?php
  // include the footer
  ________________;
 ?>
