
{{-- Check for success messages --}}
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	<strong>Success:</strong> {{Session::get('success')}}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger" role="alert" >
	<strong>Errors:</strong>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
</div>

@endif

@if(Session::has('failed'))
<div class="alert alert-danger" role="alert" >
	<strong>Errors:</strong>
	<p>The old password you typed is incorect</p>
</div>




@endif