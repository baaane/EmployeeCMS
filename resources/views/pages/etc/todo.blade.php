<h1>Todo List</h1>
<div class="">
	<form action="{{ route('todo') }}"  enctype="multipart/form-data" method="post">
		@csrf
		<div class="form-group">
			<div class="input-group mb-3">
				<input type="text" class="form-control" name="todo" placeholder="Enter todo">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary todo-submit" type="button" id="button-addon2">Button</button>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="todo-result">
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Subject</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php for ($i = 0; $i < count($todo_list); $i++) { ?>
		    <tr>
		      <th scope="row"><?= $i+1 ?></th>
		      <td><?= $todo_list[$i]->todo ?></td>
		    </tr>
	    <?php } ?>
	  </tbody>
	</table>
	<div id="result" class="result"></div>
</div>

<!-- script -->
<script type="text/x-tmpl" id="tmpl-result">
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Subject</th>
	    </tr>
	  </thead>
	  <tbody>
	  	{% for (var i=0; i < o.length; i++) { %}
		    <tr>
		      <th scope="row">{%= i+1 %}</th>
		      <td>{%= o[i].todo %}</td>
		    </tr>
	    {% } %}
	  </tbody>
	</table>
</script>