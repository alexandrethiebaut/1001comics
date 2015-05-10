<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<div class="row">

	<div class="small-12 large-6 columns bg-blanc ">
		
		<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 
		?>

	</div>

	
	<div class="small-12 large-6 columns bg-grisbleu ">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			
			<div class="entry-content">
				

				<?php the_content( __( 'Continue reading...', 'FoundationPress' ) ); ?>
				
				<button class="btn-red">En savoir plus </button>
				
			</div>
			
			
		</article>
	
	</div>
</div>