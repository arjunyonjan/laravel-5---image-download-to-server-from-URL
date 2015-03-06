<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<div class="container">

	<h1>Image Save from URL</h1>

	<form action="/urlfilesave" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label for="">URL</label>
			<input type="text" class="form-control input-sm" name="url">
		</div>

		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control input-sm" name="title" autocomplete="off">
		</div>
		<button class="btn btn-primary">Save</button>
	</form>

</div>