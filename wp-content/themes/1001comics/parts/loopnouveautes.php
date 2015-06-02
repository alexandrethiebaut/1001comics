<?php

	//
	// Afficher les prochaines sorties
	// 

	$datew = date('Y-m-d', strtotime("Last Wednesday"));

	/* Template de la recherche */
	$urlNewsTemplate = $urlTemplate.'issues/'.$format.$apiKey.'&filter=store_date:'.$datew.'&limit=6';
	//http://www.comicvine.com/api/issues/?api_key=78b8df15393111761e1a94888369a99762a13b0a&format=json&filter=store_date:2015-05-27


	$newsContent = file_get_contents($urlNewsTemplate);
	$newsData = json_decode($newsContent);
	
?>

<?php foreach ($newsData->results as $key => $value) : ?>
	<div class="small-6 large-2 columns end">
		<a href="results/?id=<?= $value->id ?>">

			<img class="comic" src="<?php echo $value->image->super_url; ?>">

			<?php if (!empty($value->name)) : ?>
				<h4 class="gris"><?php echo $value->name; ?></h4>
			<?php else : ?>
				<h4 class="gris"><?php echo $value->volume->name; ?> #<?php echo $value->issue_number; ?></h4>
			<?php endif; ?>

			<?php if (!empty($value->store_date)) : ?>
					<?php $date_added = new DateTime($value->store_date); ?>
					<p class="gris"><?php echo $date_added->format('F d, Y'); ?></p>
			<?php else : ?>
			<?php endif ?>

		</a>
	</div>
<?php endforeach; ?>