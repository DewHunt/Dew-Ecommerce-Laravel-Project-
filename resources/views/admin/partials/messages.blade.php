@if ($errors->any())
	<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-level="close">&times;</a>
		<ul>
			@foreach ($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach
		</ul>
	</div>
@endif