<?php
/**
 * MY Portfolio content-single.php
 * @version 1.0
 * +----------------------------------------------------------------------+
 * the_title()
 * +----------------------------------------------------------------------+
 * the_tags()
 * +----------------------------------------------------------------------+
 * the_content()
 * +----------------------------------------------------------------------+
 * the_permalink()
 * +----------------------------------------------------------------------+
 * has_post_thumbnail()
 * +----------------------------------------------------------------------+
 * the_post_thumbnail()
 * +----------------------------------------------------------------------+
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<?php
			// Print the title inside an <h1>
			_________________________________;

		  // Print the tags
		  ________________________( '<div class="tags">', ' | ', '</div>' );
		?>
	</header><!-- .page-header -->

	<div class="row">

		<?php
			// if featured image is set
			if ( ____________________________ ): ?>
				<div class="col-sm-2">
					<?php
						// Print the thumbnail image
			 _________________________('full', array( 'class' => 'img-fluid' ) );
					?>
				</div>
		<?php
			endif;
		?>

		<div class="col page-content">
			<?php
				// Include the page content
				_______________________;
			?>
		</div><!-- /.col -->
	</div><!-- /.row -->
</article>
