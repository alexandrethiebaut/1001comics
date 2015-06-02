<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>


<div class="large-12 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 ><a class="red" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>

	
		<p class="gris">
		<?php the_content( __( 'Continue reading...', 'FoundationPress' ) ); ?>
		</p>
	

	<footer>
		<?php $tag = get_the_tags(); if ( ! $tag ) { } else { ?><p class="red"><?php the_tags(); ?></p><?php } ?>
	</footer>
	<div class="spacing"></div>
</article>

</div>
