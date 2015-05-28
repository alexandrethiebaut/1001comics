$( document ).ready(function() {

	$('.deleteoflist').click(function() {
		var idIssue = $(this).data().issue;

		jQuery.post(
		    ajaxurl,
		    {
		        'action': 'delete_of_list',
		        'idIssue': idIssue,
		    },
		    function(response){
				alert('Supprimé !');
			}
		);
		
	});
});