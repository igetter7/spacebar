
{{ Sentinel::check() }}
<form action="{{ url('upload')}}" method="POST" enctype="multipart/form-data">
	<input type="text" name="email">
	<input type="file" name="image[]">
	<input type="password" name="password">
	{{  csrf_field() }}
	<input type="submit">
</form>
