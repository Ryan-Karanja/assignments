<?php
/**
 * My Portfolio content-excerpt.php
 * @version 0.0.1
 * +----------------------------------------------------------------------+
 * the_title()
 * +----------------------------------------------------------------------+
 * the_tags()
 * +----------------------------------------------------------------------+
 * the_excerpt()
 * +----------------------------------------------------------------------+
 * the_permalink()
 * +----------------------------------------------------------------------+
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<?php
			// Print the title inside an <h1>
			________________________________;

		  // Print the tags
		  _______________________________________________;
		?>
	</header><!-- .page-header -->

	<div class="row">
		<div class="col page-content">
			<?php
				// Include the page/post excerpt
				_____________________________;
			?>
			<a class="btn btn-primary" href="<?php ________________________; ?>">
				Read More &hellip;
			</a>
		</div><!-- /.col -->
	</div><!-- /.row -->
</article>
