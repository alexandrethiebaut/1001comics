<?php get_header(); ?>

	
		
	<?php if ( is_user_logged_in() ) : ?>

		<?php require_once(TEMPLATEPATH.'/parts/search.php'); ?>

		<div class="row">

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'foundationpress_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action( 'foundationpress_before_pagination' ); ?>

		<?php endif;?>

		</div>
		
		<?php do_action( 'foundationpress_after_content' ); ?>
	
	<?php else : ?>

		
		
		

	
	
		
<?php require_once('pointsforts.php'); ?>

	<?php require_once('listesperso.php'); ?>

	<?php require_once('presentation.php'); ?>


	<?php endif; ?>
	
	</div>
	

	<?php //get_sidebar(); ?>

</div>


<?php get_footer(); ?>
