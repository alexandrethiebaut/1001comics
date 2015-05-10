<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>







<div class="col-sm-6 col-md-10  ">
		
		<div class="ptsforts">

			<i class="<?php echo get_post_meta(get_the_ID(), 'icon', true) ; ?>  "></i>
			</div>
			
				<h4 ><?php the_title(); ?></h4>
		
			<div class="entry-content">	

					<?php the_content( __( 'Continue reading...', 'FoundationPress' ) ); ?>
					
			</div>

		

</div>

