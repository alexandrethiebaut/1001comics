$( document ).ready(function() {

	$('.addtolist').click(function() {
		var idIssue = $(this).data().issue;
		var nameVolume = $(this).data().volumename;
		var nameIssue = $(this).data().issuename;
		var numberIssue = $(this).data().issuenum;
		var thumbUrl = $(this).data().thumbsrc;

		jQuery.post(
		    ajaxurl,
		    {
		        'action': 'add_to_list',
		        'idIssue': idIssue,
		        'issue_name' : nameIssue,
		        'volume_name' : nameVolume,
		        'issue_number' : numberIssue,
		        'srcCover' : thumbUrl
		    },
		    function(response){
		    	
		    		$('.addtolist').addClass('success').text('Ajouté !');
		            console.log(response);
		        }
		);
		
	});
});