$(document).ready(function() {

	jQuery.post(
	    ajaxurl,
	    {
	        'action': 'mon_action',
	        'param': 'coucou'
	    },
	    function(response){
	            console.log(response);
	        }
	);

});