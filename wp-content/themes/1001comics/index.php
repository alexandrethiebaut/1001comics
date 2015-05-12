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

		
		
		<section class="headerbg">
<!-- DESCRIPTION du site -->
	<div class="row">
		
		<div class="small-12 large-12 columns"> 


		<div class="spacing"></div>
		<div class="spacing"></div>
			<h1 class="description "><?php bloginfo( 'name' ); ?> </h1>

			<h1 class="description">
		 	<?php echo get_bloginfo ( 'description' );  ?>
			</h1>

		
			<p class="gris text-center">La plus vaste des bibliothèque de comics</p>

		<div class="spacing"></div>

			<button class="btn-red spacing">Se connecter <i class="fa fa-child"></i></button>

		<div class="spacing"></div>

		<img class="spacing" src="wp-content/uploads/2015/04/smartphone.png">
		</div>
	</div>
	<!-- DESCRIPTION du site -->

	</section></section>
		
<?php require_once('pointsforts.php'); ?>

	<?php require_once('listesperso.php'); ?>

	<?php require_once('presentation.php'); ?>


	<?php endif; ?>
	
	</div>
	

	<?php //get_sidebar(); ?>

</div>


<?php get_footer(); ?>
