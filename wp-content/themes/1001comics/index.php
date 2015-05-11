<?php get_header(); ?>

	<div class="row">
		<div class="small-12 large-12 columns" role="main">
		
	<?php if ( is_user_logged_in() ) : ?>

		<?php require_once(TEMPLATEPATH.'/parts/search.php'); ?>

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'foundationpress_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action( 'foundationpress_before_pagination' ); ?>

		<?php endif;?>
		
		<?php do_action( 'foundationpress_after_content' ); ?>
	
	<?php else : ?>

		<!-- DESCRIPTION du site -->
		<div class="row">
			
			<div class="small-12 large-12 columns"> 
				<h1 class="description">
			 	<?php echo get_bloginfo ( 'description' );  ?>
				</h1>

					<button class="btn-red">Subscribe <i class="fa fa-child"></i></button>
					<button class="btn-border">Learn more &nbsp;<i class="fa fa-arrow-down"></i></button>

			</div>
		</div>
		
		<section class="container" role="document">

			<?php do_action( 'foundationpress_after_header' ); ?>

		</section>

	</section> <!-- //header.php -->
	
		<div class="row">

			<?php require_once('accroche.php'); ?>

			<?php require_once('presentation.php'); ?>

			<?php require_once('pointsforts.php'); ?>

	<?php endif; ?>
	
	</div>
	

	<?php //get_sidebar(); ?>

</div>


<?php get_footer(); ?>
