<h1>Todo List</h1>
<div class="">
	<form class="" action=""  enctype="multipart/form-data" method="post">
		<div class="form-group">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Enter todo" aria-label="Enter todo" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button" id="button">Submit</button>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="todo-result">
	<div id="result" class="result"></div>
</div>

<!-- script -->
<script type="text/x-tmpl" id="tmpl-result">
	<ul>
		{% for (var i=0; i < o.length; i++) { %}
		    <li>{%=o[i].todo%}</li>
		{% } %}
	</ul>
</script>