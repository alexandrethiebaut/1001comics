<div class="content container inner-wrap " id="ptsforts">
	

	<div class="large-12 columns" >

<div class="row content container " id="ptsforts">
	

	<div class="large-12 columns" > 


		<div class="spacing"></div>

			
		<?php 

		query_posts('cat=3' );


		if ( have_posts() ) : ?>

			<?php do_action('foundationPress_before_content'); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="large-4 columns" ><?php get_template_part( 'content4', get_post_format() ); ?></div>
			
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action('foundationPress_before_pagination'); ?>

		<?php endif;?>
			<?php wp_reset_query(); ?>


	</div>

	</div>


	

	</div>

</div>