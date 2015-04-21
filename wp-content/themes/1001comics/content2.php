<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>

		<h2><a href="<?php the_permalink(); ?>"></a></h2>
		
	</header>
	<div class="entry-content">
		<div class="spacing"></div>

		<?php the_content( __( 'Continue reading...', 'FoundationPress' ) ); ?>
		
		<div class="spacing"></div>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( ! $tag ) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	
</article>
