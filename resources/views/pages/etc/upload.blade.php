<h1>Image Uploader</h1>
<form action="{{ route('upload') }}"  enctype="multipart/form-data" method="post">
	@csrf
	<div class="form-group">
		<div class="input-group mb-3">
			<input type="file" name="filename" />
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</div>
	</div>
</form>