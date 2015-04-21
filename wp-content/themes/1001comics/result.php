<?php

/*
Template Name: Result
*/

	//
	// Script de pour afficher un résultat
	//
	
	$searchContent = file_get_contents($urlResultTemplate);
	$searchData = json_decode($searchContent);

 ?>

	<pre>
		<?php var_dump($urlResultTemplate); ?>
	</pre>

	<h1>IPNGeijngeniezgnei</h1>

	<div class="row">
		<div class="large-12 columns">

			<?php foreach ($searchData->results as $k => $v) : ?>

				<div class="row">
					<img class="small-6 columns" src="<?= $v->image->thumb_url; ?>" alt="">
					<h2><?= $v->name; ?></h2>
					<p><?= $v->description; ?></p>
				</div>

			<?php endforeach; ?>


		</div>
	</div>