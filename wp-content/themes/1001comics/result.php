
<?php 

	/*
	Template Name: Result
	*/	
		
	get_header(product); 

?>
<section class="headerbg">
<div class="spacing"></div>
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

							<button class="small-11 columns addtolist button large round btn-red" data-issue="<?php echo $_GET['id']?>" data-volumename="<?php echo $v->volume->name; ?>" data-issuename="<?php echo $v->name; ?>" data-issuenum="<?php echo $v->issue_number; ?>" data-thumbsrc="<?php echo $v->image->super_url; ?>">Ajouter à ma collection</button>

							<button class="small-11 left columns button large round btn-border" data-issue="<?php echo $_GET['id']?>">Marquer comme lu</button>
						</div>						
					</div> 

					<div class="small-6 columns">

						<?php if (!empty($v->name)) : ?>
							<h2 class="red"><?php echo $v->name; ?></h2>
						<?php else : ?>
							<small>Non défini</small>
						<?php endif; ?>
						<h3 class="text-blanc"><?= $v->volume->name; ?> #<?= $v->issue_number ?></h3>

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

			<?php endforeach; ?>

			<div class="spacing"></div>
		</div>

	</div>
	<!-- COMICS SIMILAIRES -->
	<div class="row">
			<div class="spacing"></div>
		<h2 class="text-center text-blanc"> COMICS SIMILAIRES </h2>
		

		<div class="spacing"></div>

			<div class="small-6 large-2 columns">
				<img class="comic" src="../wp-content/uploads/2015/04/batmanC.jpg">
				<h4 class="gris">The Merman Batman</h4>
				<p class="gris">12/04/15</p>
			</div>

			<div class="small-6 large-2 columns">
				<img class="comic" src="../wp-content/uploads/2015/04/batmanC.jpg">
				<h4 class="gris">The Merman Batman</h4>
				<p class="gris">12/04/15</p>
			</div>

			<div class="small-6 large-2 columns">
				<img class="comic" src="../wp-content/uploads/2015/04/batmanC.jpg">
				<h4 class="gris">The Merman Batman</h4>
				<p class="gris">12/04/15</p>
			</div>

			<div class="small-6 large-2 columns">
				<img class="comic" src="../wp-content/uploads/2015/04/batmanC.jpg">
				<h4 class="gris">The Merman Batman</h4>
				<p class="gris">12/04/15</p>
			</div>

			<div class="small-6 large-2 columns">
				<img class="comic" src="../wp-content/uploads/2015/04/batmanC.jpg">
				<h4 class="gris">The Merman Batman</h4>
				<p class="gris">12/04/15</p>
			</div>

			<div class="small-6 large-2 columns">
				<img class="comic" src="../wp-content/uploads/2015/04/batmanC.jpg">
				<h4 class="gris">The Merman Batman</h4>
				<p class="gris">12/04/15</p>
			</div>

		</div><div class="spacing"></div>
		<!-- COMICS SIMILAIRES -->
</section>
<?php get_footer(); ?>