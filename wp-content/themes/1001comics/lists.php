
<?php 

	/*
	Template Name: Collection
	*/	
		
	get_header(product);

	global $current_user, $wpdb;

    $IDUser = $current_user->data->ID;
    $userlist_issue = $wpdb->prefix.'userlist_issue';
	$select = $wpdb->get_results("SELECT * FROM $userlist_issue");

?>
<section class="headerbg">
<div class="row">

	<div class="small-12 large-12 columns" role="main">
	<div class="spacing"></div>
	<h1 class="gris text-center">Ma collection</h1>
	<h4 class="gris text-center">- 1001 Comics -</h4>
	<div class="spacing"></div>
	

		<div class="row">
			<?php $rownumber = 0; foreach ($select as $k) : ?>
				
				<?php if(($rownumber%6) == 0) : ?>
					
					</div> <!-- Fermeture de la current row -->
					<div class="row"> <!-- Ouverture de la row suivante -->

				<?php endif; ?>

				<div class="small-6 medium-4 large-2 columns end">
					<a href="results/?id=<?php echo $k->Id ?>">
						<!-- <span><?php echo $k->id ?></span> -->
						<img src="<?php echo $k->Cover_source ?>" alt="#">

						<?php if (!empty($k->Issue_name)) : ?>
							<h3 class="gris"><?php echo $k->Issue_name; ?></h3>
						<?php else : ?>
							<h3 class="gris"><?php echo $k->Volume_name; ?> #<?php echo $k->Issue_number; ?></h3>
						<?php endif; ?>

						<?php if (!empty($k->store_date)) : ?>
							<?php $date_added = new DateTime($k->store_date); ?>
							<h5 class="gris"><?php echo $date_added->format('F d, Y'); ?></h5>
						<?php else : ?>
						<?php endif ?>
					</a>
					<button class="deleteoflist" data-issue="<?php echo $k->Id; ?>">Supprimer</button>

				</div>
				
			<?php $rownumber++; ?>

			<?php endforeach; ?>

		</div>

	</div>
</section>
<?php get_footer(); ?>