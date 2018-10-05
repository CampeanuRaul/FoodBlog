@extends('main')

@section('title', '| User profile')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection


@section('content')

<div class="row" style="margin:50px 0 70px" >
	<div class="col-md-8 col-md-offset-2">
		<h2>Change password</h2>
		{{ Form::open(['route' => ['users.password'], 'method' => 'PUT']) }}
		{{ Form::label('old_pass', 'Old password:', ['class' => 'top']) }}
		{{ Form::text('old_pass', null, ['class' => 'form-control']) }}
		{{ Form::label('new_pass', 'New password:', ['class' => 'top']) }}
		{{ Form::text('new_pass', null, ['class' => 'form-control']) }}
		{{ Form::submit('Change password', ['class' => 'btn btn-primary top']) }}
		{{ Form::close() }}
	</div>
</div>


@endsection