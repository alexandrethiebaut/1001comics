
<?php 

	/*
	Template Name: Collection
	*/	
		
	get_header();

	global $current_user, $wpdb;

    $IDUser = $current_user->data->ID;
    $userlist_issue = $wpdb->prefix.'userlist_issue';
	$select = $wpdb->get_results("SELECT * FROM $userlist_issue");

?>

<div class="row">

	<div class="small-12 large-12 columns" role="main">
	
	<h2>Ma collection</h2>

		<div class="row">
			<?php $rownumber = 0; foreach ($select as $k) : ?>
				
				<?php if(($rownumber%6) == 0) : ?>
					
					</div> <!-- Fermeture de la current row -->
					<div class="row"> <!-- Ouverture de la row suivante -->

				<?php endif; ?>

				<div class="small-6 medium-4 large-2 columns end">
					<a href="#">
						<!-- <span><?php echo $k->id ?></span> -->
						<img src="<?php echo $k->Cover_source ?>" alt="#">

						<?php if (!empty($k->Issue_name)) : ?>
							<h3 class="gris"><?php echo $k->Issue_name; ?></h3>
						<?php else : ?>
						<?php endif; ?>
						<h3 class="gris"><?php echo $k->Volume_name; ?> #<?php echo $k->Issue_number; ?></h3>

						<?php if (!empty($k->store_date)) : ?>
							<?php $date_added = new DateTime($k->store_date); ?>
							<h5 class="gris"><?php echo $date_added->format('F d, Y'); ?></h5>
						<?php else : ?>
						<?php endif ?>

						<div class="spacing"></div>
					</a>
				</div>
				
			<?php $rownumber++; ?>

			<?php endforeach; ?>

		</div>

	</div>

<?php get_footer(); ?>