@extends('main')

@section('title', '| Edit pofile')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection


@section('content')

<div class="row" style="margin:30px 0 50px" >
	<div class="col-md-8 col-md-offset-2">
		{{ Form::model($user,['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => 'true']) }}
		{{ Form::label('name', 'Name:', ['class' => 'top']) }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
		{{ Form::label('email', 'Email:', ['class' => 'top']) }}
		{{ Form::text('email', null, ['class' => 'form-control']) }}
		{{ Form::label('image','Image:', ['class' => 'top']) }}
		{{ Form::file('image') }}
		{{ Form::submit('Update', [ 'class' => 'btn btn-primary top btn-block']) }}
		{{ Form::close() }}
	</div>
</div>

@endsection