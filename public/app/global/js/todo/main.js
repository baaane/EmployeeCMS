function init( jQuery ) {
    // Code to run when the document is ready.
    Todo();
}

// get todo list function
var Todo = function(){
    $.ajax({
	    url: '/todo',
	    type: 'GET',
	    success: function(response){
	    	// console.log(response.data);
    		var result = document.getElementById('result');

	        $container = $('.todo-result')
	        $container.empty();
	        $container.append(result.innerHTML = tmpl("tmpl-result", response.data))
	        // $.each(response.data, function(i, d){} )
	    }
    });
};

$( document ).ready( init );