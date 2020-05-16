$('html').on('keydown', 'input', function(e) {
	if(e.keyCode === 13) {
    	$.ajax(
    		"/ajax/new_message.php",
    		{
    			method: "POST",
    			data: {message: $('input').val()}
    		}
    	);
    	
    	$('input').val("");
    }
});
