<?php
/**
 * My Portfolio search.php
 * This template will be used when: ______________________________________
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
 * get_search_form()
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
  	// no search results returned
  	else: ?>
  	  <p>Sorry, but nothing matched your search terms.
				Please try again with some different keywords.</p>
			<?php
			  // include the search form
			  __________________________;
		endif;
	?>
</main>
<?php
// include the footer
________________;
?>
