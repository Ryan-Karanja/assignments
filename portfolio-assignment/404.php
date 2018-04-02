<?php
/**
 * My Portfolio 404.php
 * The template for displaying 404 pages (not found)
 * @version 0.0.1
 * +----------------------------------------------------------------------+
 * get_header()
 * +----------------------------------------------------------------------+
 * get_search_form()
 * +----------------------------------------------------------------------+
 * get_footer()
 * +----------------------------------------------------------------------+
 */

	// include header
	_____________________;
?>

<main id="main" class="container" role="main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title">404: Page not found</h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p>It looks like nothing was found at this location. Maybe try a search?</p>

			<?php
				// Include search form
				_______________________();
			?>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->
</main><!-- #main -->

<?php
  // include footer
  _________________();
?>
