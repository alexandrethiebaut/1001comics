
<?php 

	/*
	Template Name: Result
	*/	
		
	get_header(); 

?>
<section class="headerbg">
/div><div class="spacing"></div>
<div class="row ">
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

	<div class="row ">
		<div class="large-12 columns">

			<?php foreach ($resultData->results as $k => $v) : ?>

				<div class="row">
				
					<div class="small-6 columns">
						<div class="row collapse"> 
							<img class="small-11 columns" src="<?= $v->image->super_url; ?>" alt=""> 

							<button class="small-11 columns addtolist button large round" data-issue="<?php echo $_GET['id']?>" data-volumename="<?php echo $v->volume->name; ?>" data-issuename="<?php echo $v->name; ?>" data-issuenum="<?php echo $v->issue_number; ?>" data-thumbsrc="<?php echo $v->image->super_url; ?>">Ajouter à ma collection</button>

							<button class="small-11 left columns button large round" data-issue="<?php echo $_GET['id']?>">Marquer comme lu</button>
						</div>						
					</div> 

					<div class="small-6 columns">

						<?php if (!empty($v->name)) : ?>
							<h2 class="red"><?php echo $v->name; ?></h2>
						<?php else : ?>
							<h2 class="red"><?php echo $v->volume->name; ?> #<?= $v->issue_number ?></h2>
						<?php endif; ?>
						
						<!-- Specs. -->
						<dl>
							<dt class="text-blanc">Titre</dt>
							<dd class="gris">…………………………<?php echo $v->name; ?></dd>
							<dt class="text-blanc">Volume</dt>
							<dd class="gris">…………………………<?php echo $v->volume->name; ?></dd>
							<dt class="text-blanc">Numéro de l'issue</dt>
							<dd class="gris">…………………………<?php echo $v->issue_number; ?></dd>
							<dt class="text-blanc">Cover date</dt>
							<dd class="gris">…………………………<?php echo $v->cover_date; ?></dd>
							<dt class="text-blanc">In store date</dt>
							<dd class="gris">…………………………<?php echo $v->store_date; ?></dd>
							<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"></div>
						</dl>

					</div>

				</div>

			<div class="spacing"></div>
		</div>

	</div>

	<!-- COMICS SIMILAIRES -->
	<div class="row">

		<div class="spacing"></div>
		<h2 class="text-center text-blanc"> COMICS SIMILAIRES </h2>
		

		<div class="spacing"></div>
		<?php $volumeId = $v->volume->id ;?>
		<?php require_once(TEMPLATEPATH.'/parts/loopsimilaires.php'); ?>

	</div>
	<div class="spacing"></div>
	<!-- COMICS SIMILAIRES -->

			<?php // FERMETURE DE LA BOUCLE ICI POUR RECUP LE VOLUME ID ?>
			<?php endforeach; ?>

</section>
<?php get_footer(); ?>