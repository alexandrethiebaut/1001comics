
<?php 

	/*
	Template Name: Result
	*/	
		
	get_header(); 

?>

<div class="row">
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

	<div class="row">
		<div class="large-12 columns">

			<?php foreach ($resultData->results as $k => $v) : ?>

				<div class="row">

					<div class="small-6 columns">
						<div class="row collapse">
							<img class="small-12 columns" src="<?= $v->image->super_url; ?>" alt="">
							<button class="small-12 columns addtolist button large round" data-issue="<?php echo $_GET['id']?>" data-volumename="<?php echo $v->volume->name; ?>" data-issuename="<?php echo $v->name; ?>" data-issuenum="<?php echo $v->issue_number; ?>" data-thumbsrc="<?php echo $v->image->super_url; ?>">Ajouter à ma collection</button>
							<button class="small-12 columns button large round" data-issue="<?php echo $_GET['id']?>">Marquer comme lu</button>
						</div>						
					</div>

					<div class="small-6 columns">

						<?php if (!empty($v->name)) : ?>
							<h2><?php echo $v->name; ?></h2>
						<?php else : ?>
							<small>Non défini</small>
						<?php endif; ?>
						<h3><?= $v->volume->name; ?> #<?= $v->issue_number ?></h3>

						<!-- Specs. -->
						<dl>
							<dt>Titre</dt>
							<dd><?php echo $v->name; ?></dd>
							<dt>Volume</dt>
							<dd><?php echo $v->volume->name; ?></dd>
							<dt>Numéro de l'issue</dt>
							<dd><?php echo $v->issue_number; ?></dd>
							<dt>Cover date</dt>
							<dd><?php echo $v->cover_date; ?></dd>
							<dt>In store date</dt>
							<dd><?php echo $v->store_date; ?></dd>
						</dl>

					</div>

				</div>

			<?php endforeach; ?>


		</div>
	</div>

<?php get_footer(); ?>