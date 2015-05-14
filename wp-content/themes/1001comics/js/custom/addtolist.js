$( document ).ready(function() {

	$('.addtolist').click(function() {
		var idIssue = $(this).data().issue;

		jQuery.post(
		    ajaxurl,
		    {
		        'action': 'add_to_list',
		        'param': idIssue
		    },
		    function(response){
		    	
		    		$('.addtolist').addClass('success').text('Ajouté !');
		            console.log(response);
		        }
		);
		
	});
});