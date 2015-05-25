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

// Configuration AJAX

function add_js_scripts() {
	wp_enqueue_script( 'script', get_template_directory_uri().'/js/custom/addtolist.js', array('jquery'), '1.0', true );

	// pass Ajax Url to script.js
	wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}

add_action('wp_enqueue_scripts', 'add_js_scripts');

add_action( 'wp_ajax_add_to_list', 'add_to_list' );
add_action( 'wp_ajax_nopriv_add_to_list', 'add_to_list' );

// #AJOUW
function add_to_list() {

	global $current_user, $wpdb;

    $IDUser = $current_user->data->ID;
    $IDVolume = $_POST['idIssue'];
    $IssueName= $_POST['issue_name'];
    $VolumeName = $_POST['volume_name'];
    $IssueNumber = $_POST['issue_number'];
    $CoverSrc = $_POST['srcCover'];

    $insert = $wpdb->insert($wpdb->prefix.'userlist_issue', 
    	
    	array(
    		'Id' => $IDVolume, 
    		'User_id' => $IDUser,
    		'Issue_name' => $IssueName,
    		'Volume_name' => $VolumeName,
    		'Issue_number' => $IssueNumber,
    		'Cover_source' => $CoverSrc
   		 ));

    echo $insert;

    die();
}

// #RECWACHE
// function display_collection() {

// 	global $current_user, $wpdb;

//     $IDUser = $current_user->data->ID;
//     $userlist_issue = $wpdb->prefix.'userlist_issue';
// 	$select = $wpdb->get_results("SELECT * FROM $userlist_issue");

//     echo '<pre>';
// 	    var_dump($select);
//     echo '</pre>';
// }




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
	$filtres = '&field_list=image,id,name,volume,issue_number,store_date';

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