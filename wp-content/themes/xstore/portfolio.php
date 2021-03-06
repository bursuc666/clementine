<?php
/**
 * Template Name: Portfolio
 *
 */
?>

<?php
get_header();
?>

<?php

$l = etheme_page_config();

$full_width = etheme_get_option('portfolio_fullwidth');

if( $full_width ) {
	$class = 'port-full-width';
} else {
	$class = 'container';
}

?>

<?php do_action( 'etheme_page_heading' ); ?>

	<div class="<?php echo esc_attr($class); ?>">
		<div class="page-content sidebar-position-without">
			<div class="content">	
				<?php if( have_posts() && empty( get_query_var( 'portfolio_category' ) ) ): while( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
				<?php etheme_portfolio(); ?>
			</div>
		</div>
	</div>

<?php
get_footer();
?>