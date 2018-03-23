<?php
/**
 * My Portfolio front-page.php
 * This template will be used when: _______________________________________
 * @version 1.0
 * +----------------------------------------------------------------------+
 * get_footer()
 * +----------------------------------------------------------------------+
 * get_header()
 * +----------------------------------------------------------------------+
 * WP_Query()
 * +----------------------------------------------------------------------+
 * the_post_thumbnail()
 * +----------------------------------------------------------------------+
 * the_title()
 * +----------------------------------------------------------------------+
 * the_tags()
 * +----------------------------------------------------------------------+
 * the_permalink()
 * +----------------------------------------------------------------------+
 * wp_reset_postdata()
 * +----------------------------------------------------------------------+
 */

	// Include the header
	___________________________;
?>

<main id="main" class="container" role="main">
	<h1>SOME OF MY WORK</h1>

	<?php
		/**
		 * Custom Blog Query:
		 * Query the latest 4 posts in the "portfolio" category
		 */

		// The custom arguments
		$args = array(
			_____________________________,
			_____________________________
		);

		// Create a new Query:
		$query1 = new WP_Query( $args );

		// If query1 has any posts
		if ( $query1->have_posts() ): ?>

			<div class="row">

			<?php
				// Loop query1
				while ( $query1->have_posts() ):
					// Setup query1 postdata
					$query1->the_post(); ?>
					<div class="col-sm-3">
						<div class="thumbnail-wrap">
							<?php
							  // Print the featured image
							  _________________('full', array( 'class' => 'img-fluid' ) );
							 ?>
						</div><!-- /.thumbnail-wrap -->
						<?php
							// Print the title with an <a>
							___________________( '<a class="front-page-link" href="' .
              // print the permalink
               ______________________ . '">', '</a>' );

							// Print the tags inside a <div> and separated by |
							____________________( '<div class="tags">', ' | ', '</div>' );
						?>
					</div>

				<?php
					endwhile;
				?>

				</div><!--/.row-->

	<?php
		// reset the postdata for the main query **IMPORTANT**
		_______________________;
		endif;
	?>

	<?php
		// CHALLENGE
		// Custom Blog Query2:
		// Query the latest 4 posts EXCLUDING the portfolio category
		// Otherwise display exactly as the row above
	?>

</main>

<?php
	// include the footer
	____________________________;
?>
