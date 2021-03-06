<section class="headerbg">
<?php get_header(); ?>

	
		
	<?php if ( is_user_logged_in() ) : ?>
		
		<div class="row" style="padding-top:100px; text-align:center;">
			<div class="small-12 columns">
				<h2 style="color:white; font-size: 60px;">Bonjour <?php echo $current_user->user_firstname; ?></h2>	
			</div>
		</div>

		<?php require_once(TEMPLATEPATH.'/parts/search.php'); ?>
	
		<div class="row">

		<!-- categorie ACTUALITES -->
			<div class="spacing"></div>
		<h2 class="text-center text-blanc"><?php echo get_cat_name(4);?> </h2>
			<div class="spacing"></div> 

		
			<?php query_posts('cat=4' ); ?>
		

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'foundationpress_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="small-12 large-4 columns"><?php get_template_part( 'content5', get_post_format() ); ?></div>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action( 'foundationpress_before_pagination' ); ?>

		<?php endif;?>
		</div>
		
		</section>

		<!-- categorie ACTUALITES -->
		
		<?php do_action( 'foundationpress_after_content' ); ?>

		<!-- NOUVEAUTES -->
		<section class="bg-grisbleu">
		<div class="row">
			<div class="spacing"></div>
		<h2 class="text-center text-blanc"> Nouveautés </h2>
		<p class="text-center gris">Trouvez le comics qui vous convient, ou découvrez-en d’autres !</p>

		<div class="spacing"></div>

			<?php require_once(TEMPLATEPATH.'/parts/loopnouveautes.php'); ?>

		<div class="spacing"></div>
	</section>
	<!-- NOUVEAUTES -->
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

			<a class="btn-red spacing medium button" href="<?php echo wp_login_url( home_url()); ?>" title="Se Connecter">Se Connecter <i class="fa fa-child"></i></a>

		<div class="spacing"></div>

		<img class="spacing" src="wp-content/uploads/2015/04/smartphone.png">
		</div>
	</div>
	<!-- DESCRIPTION du site -->

	</section> 
		
	<?php require_once('pointsforts.php'); ?>

	<?php require_once('listesperso.php'); ?>

	<?php require_once('presentation.php'); ?>


	<?php endif; ?>
	
	</div>
	

	<?php //get_sidebar(); ?>

</div>


<?php get_footer(); ?>
