<h1>Todo List</h1>

<form action="{{ route('todo') }}"  enctype="multipart/form-data" method="post" onSubmit="return false;">
	@csrf
	<div class="form-group">
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="todo" placeholder="Enter todo">
			<div class="input-group-append">
				<button class="btn btn-primary todo-submit" type="button" id="button-addon2">Add</button>
			</div>
		</div>
	</div>
</form>


<div class="todo-result">
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Subject</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php for ($i = 0; $i < count($todo_list); $i++) { ?>
		    <tr>
		      <td scope="row"><?= $i+1 ?></td>
		      <td scope="row"><input type="text" id="input-field" name="todo_<?= $todo_list[$i]->id ?>" value="<?= $todo_list[$i]->todo ?>" disabled></td>
		      <td scope="row">
		      	<button class="btn todo edit btn-success" type="button" id="edit_<?= $todo_list[$i]->id ?>" data-todo-id="<?=$todo_list[$i]->id?>">Edit</button>
		      	<button class="btn todo update btn-success" type="button" id="update_<?= $todo_list[$i]->id ?>" data-todo-id="<?=$todo_list[$i]->id?>" style="display: none;">Update</button>
		      	<button class="btn todo btn-danger" type="button" id="del_btn" data-todo-id="<?=$todo_list[$i]->id?>">Delete</button>
		      </td>
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
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	{% for (var i=0; i < o.length; i++) { %}
		    <tr>
		      <td scope="row">{%= i+1 %}</td>
		      <td scope="row"><input type="text" name="todo_{%= o[i].id %}" value="{%= o[i].todo %}" disabled></td>
		      <td scope="row">
		      	<button class="btn todo edit btn-success" type="button" id="edit_{%= o[i].id %}" data-todo-id="{%= o[i].id %}">Edit</button>
		      	<button class="btn todo update btn-success" type="button" id="update_{%= o[i].id %}" data-todo-id="{%= o[i].id %}" style="display: none;">Update</button>
		      	<button class="btn todo btn-danger"  type="button" id="del_btn" data-todo-id="{%= o[i].id %}">Delete</button>
		      </td>
		    </tr>
	    {% } %}
	  </tbody>
	</table>
</script>