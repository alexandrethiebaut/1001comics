<?php get_header(); ?>

<div class="row">
	<div class="small-12 large-12 columns" role="main">


	
	<?php  wp_loginout(); ?>

	<?php if ( is_user_logged_in() ) : ?>

		<?php // require_once(TEMPLATEPATH.'/parts/search.php'); ?>

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'foundationpress_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action( 'foundationpress_before_pagination' ); ?>

		<?php endif;?>

		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
			</nav>

		<?php } ?>
		
		<?php do_action( 'foundationpress_after_content' ); ?>
	
	<?php else : ?>
		<p>pas log</p>
	<?php endif; ?>
	
	</div>
	

	<?php //get_sidebar(); ?>

</div>

	<div class="row">
	


	<?php require_once('accroche.php'); ?>

	<?php require_once('presentation.php'); ?>

	<?php require_once('pointsforts.php'); ?>


<?php get_footer(); ?>
