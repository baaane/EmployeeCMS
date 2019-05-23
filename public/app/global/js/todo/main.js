function init( jQuery ) {
    // Code to run when the document is ready.
    Todo();
}

// get todo list function
var Todo = function(){
	$container = $('.todo-result');
	var result = document.getElementById('result');	

    $('body').on('click', '.todo-submit', function(e){
		e.preventDefault();

		var form = {
	        _token: $('input[name=_token]').val(),
	        _action: 'save',
	        todo: $('input[name=todo]').val(),
	    }; 

	    $.ajax({
		    url: '/todo',
		    type: 'POST',
		    data: form,
		    success: function(response){
		    	// console.log(response.data);
			    $container.empty();
		        $container.append(result.innerHTML = tmpl("tmpl-result", response.data));

		        $('input[name=todo]').val('');
		        // $.each(response.data, function(i, d){} )
		    }
	    });
    });
};

$( document ).ready( init );