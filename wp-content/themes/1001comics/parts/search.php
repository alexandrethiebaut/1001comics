<?php 

	//
	// Script de recherche 
	//

	if (isset($_POST['search']) && ($_POST['search'] != '')) {
		$searchContent = file_get_contents($urlSearchTemplate);
		$searchData = json_decode($searchContent);
	}

 ?>

	<div class="row" style="padding-top: 100px;">
		<div class="spacing"></div>
		<div class="large-12 columns">
		<pre>
			
			<?php //var_dump($searchData); ?>
		</pre>
			<h2 class="gris">Effectuer une recherche</h2>
		</div>
	</div>

	<div class="row">
		<form action="" method="post">
			<div class="small-12 columns">
				<div class="row collapse">
					<div class="small-9 columns">
						<input class="bg-grisbleu" type="text" name="search" value="<?= $_POST['search']; ?>">
					</div>
					<!-- <div class="small-2 columns">
						<select name="resources" id="resources">
							<option value="">All</option>
							<option value="character">Character</option>
							<option value="video">Video</option>
						</select>
					</div> -->
					<div class="small-3 columns">
						<input class="postfix button bg-red" type="submit" value="Envoyer">
					</div>
				</div>
			</div>
		</form>
	</div>
	
	<br>

	<div class="row" >
		<div class="small-12 columns end">
			<!--<a class="button" class="bg-red" href="">Afficher plus de résultats</a>  Je sais pas comment faire -->
		</div>
	</div>

	<!-- Script d'affichage des données -->
	<?php if (isset($_POST['search']) && ($_POST['search'] != '')) : ?>
	<h1 class="gris text-center">Résultats de la recherche pour <br> <h2 class="red text-center">"<?php echo $_POST['search']; ?>"</h2></h1>
		<div class="row" style="padding-top: 100px;">
		<div class="spacing"></div>
			<div class="large-12 columns">
				
			
			</div>
		</div>

		<div class="row">


			<?php $rownumber = 0; foreach ($searchData->results as $k => $v) : ?>
				
				<?php if(($rownumber%6) == 0) : ?>
					
					</div> <!-- Fermeture de la current row -->
		<div class="row"> <!-- Ouverture de la row suivante -->

				<?php endif; ?>

				<div class="small-6 medium-4 large-2 columns end">
					<a href="results/?id=<?= $v->id ?>">
						<!-- <span><?php echo $v->id ?></span> -->
						<img src="<?php echo $v->image->super_url ?>" alt="#">

						<?php if (!empty($v->name)) : ?>
							<h3 class="text-blanc"><?php echo $v->name; ?></h3>
						<?php else : ?>
						<?php endif; ?>
						<h5 class="gris"><?php echo $v->volume->name; ?> #<?php echo $v->issue_number; ?></h5>

						<?php if (!empty($v->store_date)) : ?>
							<?php $date_added = new DateTime($v->store_date); ?>
							<h5 class="gris"><?php echo $date_added->format('F d, Y'); ?></h5>
						<?php else : ?>
						<?php endif ?>

						<div class="spacing"></div>
					</a>
				</div>
				
			<?php $rownumber++; ?>

			<?php endforeach; ?>

		</div>

	<?php endif ?>