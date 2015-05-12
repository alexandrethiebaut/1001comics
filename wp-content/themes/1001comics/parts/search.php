<?php 

	//
	// Script de recherche 
	//

	if (isset($_POST['search']) && ($_POST['search'] != '')) {
		$searchContent = file_get_contents($urlSearchTemplate);
		$searchData = json_decode($searchContent);
	}

 ?>

	<!-- Script d'affichage des données -->
	<?php if (isset($_POST['search']) && ($_POST['search'] != '')) : ?>

		<div class="row" style="padding-top: 100px;">
			<div class="large-12 columns">
				<h1>Résultats de la recherche pour <br>"<?php echo $_POST['search']; ?>"</h1>
			</div>
		</div>

		<div class="row">


			<?php $rownumber = 0; foreach ($searchData->results as $k => $v) : ?>
				
				<?php if(($rownumber%6) == 0) : ?>
					
					</div> <!-- Fermeture de la current row -->
					<div class="row"> <!-- Ouverture de la row suivante -->

				<?php endif; ?>

				<div class="small-2 columns end">
					<a href="result?id=<?= $v->id ?>">
						<!-- <span><?php echo $v->id ?></span> -->
						<img src="<?php echo $v->image->thumb_url ?>" alt="#">
						<h3><?php echo $v->name ?></h3>
					</a>
				</div>
				
			<?php $rownumber++; ?>

			<?php endforeach; ?>

		</div>

	<?php endif ?>

	<pre>
		<?php //var_dump($urlSearchTemplate); ?>
	</pre>

	<div class="row" style="padding-top: 100px;">
		<div class="large-12 columns">
			<h1>Effectuer une recherche</h1>
		</div>
	</div>

	<div class="row">
		<form action="" method="post">
			<div class="small-12 columns">
				<div class="row collapse">
					<div class="small-9 columns">
						<input class="" type="text" name="search" value="<?= $_POST['search']; ?>">
					</div>
					<!-- <div class="small-2 columns">
						<select name="resources" id="resources">
							<option value="">All</option>
							<option value="character">Character</option>
							<option value="video">Video</option>
						</select>
					</div> -->
					<div class="small-3 columns">
						<input class="postfix button" type="submit" value="Envoyer">
					</div>
				</div>
			</div>
		</form>
	</div>
	
	<br>

	<div class="row" style="padding-bottom: 100px;">
		<div class="small-12 columns end">
			<a class="button" href="">Afficher plus de résultats</a> <!-- Je sais pas comment faire -->
		</div>
	</div>
