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
    
    $('body').on('click', '.btn.todo.edit', function(e){
		e.preventDefault();

		id = $(this).attr("data-todo-id");
		todo = $('input[name=todo_'+id+']');
		todo.prop('disabled', false);

	    $(this).hide();
	    $('#update_'+id).show();
    });

    $('body').on('click', '.btn.todo.update', function(e){
		e.preventDefault();

		var form = {
	        _token: $('input[name=_token]').val(),
	        _action: 'edit',
	        todo: $('input[name=todo_'+id+']').val(),
	       	id: $(this).attr('data-todo-id'),
	    }; 
		
		todo = $('input[name=todo_'+form.id+']');
		todo.prop('disabled', true);

		$(this).hide();
	    $('#edit_'+id).show();

  		// console.log(form);
	    $.ajax({
		    url: '/todo',
		    type: 'POST',
		    data: form,
		    success: function(response){

		        $('input[name=todo]').val('');
		        // $.each(response.data, function(i, d){} )
		    }
	    });

	});

    $('body').on('click', '#del_btn', function(e){
		e.preventDefault();

		var form = {
	        _token: $('input[name=_token]').val(),
	        _action: 'delete',
	        todo: $('input[name=todo]').val(),
	       	id: $(this).attr('data-todo-id'),
	    }; 

	    $.ajax({
		    url: '/todo',
		    type: 'POST',
		    data: form,
		    success: function(response){
		    	// console.log(response.data);
		        $container.empty();
		        $container.append(result.innerHTML = tmpl("tmpl-result", response.data));
		        // $.each(response.data, function(i, d){} )
		    }
	    });
    });
};

$( document ).ready( init );