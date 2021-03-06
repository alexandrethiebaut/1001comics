<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>


<div class="container bg-grisbleu">

<div class="spacing"></div>
	
		
		<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 
		?>

	

	
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			
			<div class="entry-content">
				<div class="spacing"></div>

				<?php the_content( __( 'Continue reading...', 'FoundationPress' ) ); ?>
				
				<button class="btn-red">S'inscrire </button>
				
			</div>
			
			
		</article>
	
	<div class="spacing"></div>

</div>
