<?php
/**
 * Index
 *
 * Theme index.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<div class="wrap">
	<div class=" homepage-content">
		<h1><?php esc_html_e( 'THIS IS A BLANK TEMPLATE' ); ?></h1>
		<p>
			<?php
				esc_html_e("If the background is pink, you're in the right place" );
				echo '<div><strong>Gulp + Bootstrap 4</strong></div>';
			?>
		</p>
	</div>
	<!-- /.content -->
</div>
<!-- /.wrap -->

<?php get_footer(); ?>
