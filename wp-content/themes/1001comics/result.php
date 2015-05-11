
<?php 

	/*
	Template Name: Result
	*/	
		
	get_header(); 

?>

<div class="row" style="padding-top: 100px;">
	<div class="small-12 large-12 columns" role="main">

<?php

	//
	// Script de pour afficher un résultat
	//
	
	$resultContent = file_get_contents($urlResultTemplate);
	$resultData = json_decode($resultContent);

 ?>

	<pre>
		<?php // var_dump($urlResultTemplate); ?>
		<?php // var_dump($resultData) ?>
	</pre>

	<h3># <?= $_GET['id'] ?></h3>

	<div class="row">
		<div class="large-12 columns">

			<?php foreach ($resultData->results as $k => $v) : ?>

				<div class="row">
					<img class="small-6 columns" src="<?= $v->image->super_url; ?>" alt="">
					<div class="small-6 columns">
						<h2><?= $v->volume->name; ?> #<?= $v->issue_number ?></h2>
						<ul>
							<li>Titre : <?= $v->name ?></li>
							<li>Date : <?= $v->cover_date ?></li>
						</ul>
						<p><?= $v->description; ?></p>
					</div>
				</div>

			<?php endforeach; ?>


		</div>
	</div>

<?php get_footer(); ?>