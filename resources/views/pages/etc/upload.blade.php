<h1>Image Uploader</h1>
<form action="{{ route('upload') }}"  enctype="multipart/form-data" method="post">
	@csrf
	<div class="form-group">
		<div class="input-group mb-3">
			<input type="text" name="nameew"/>
			<input type="file" name="filename"/>
			<input type="text" name="new_name"/>
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</div>
	</div>
</form>