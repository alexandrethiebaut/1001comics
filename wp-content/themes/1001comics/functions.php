<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');


//---------------------------------------------------//
// CONFIGURATION DE L'API
//---------------------------------------------------//

	error_reporting(0);
	//$var = $_SERVER['REQUEST_URI']; var_dump($var) 

	//
	// VARIABLES
	// 

	/* API key */
	$apiKey = '&api_key=a9af96e5dbb8a540888f2dc076092dfc922d5b8f';

	/* Format */
	$format = '?format=json';

	/* Limit set  = 24 results */
	$limit = '&limit=24';

	/* Resoucres = Type de contenu à chercher */
	//$resources = '&resources='.$_POST['resources'];
	$resources = "&resources=issue";

	/* Filtres = Type de contenu à afficher dans la recherche */
	$filtres = '&field_list=image,id,name';

	/* Offset */
	$offset = "&offset"; // must be dynamic


	$urlTemplate = 'http://www.comicvine.com/api/';


	// 
	// Configuration pour la recherche 
	// 

	/* Template pour la recherche */
	$urlSearchTemplate = $urlTemplate.'search/'.$format.$apiKey.'&query='.$_POST['search'].$resources.$filtres.$limit;

	//
	// Configuration pour affihcer un résultat
	//

	/* Template pour affichage */
	$urlResultTemplate = $urlTemplate.'issues/'.$format.$apiKey.'&filter=id:'.$_GET['id'];