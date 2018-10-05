@extends('main')

@section('title', '| Edit pofile')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection


@section('content')

<div class="row" style="margin:50px 0 70px" >
	<div class="col-md-8 col-md-offset-2">
		<h2>You sure want to delete your account?</h2>
		{{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) }}
		{{ Form::submit('Yes, I\'m sure', ['class' => 'btn btn-danger btn-block']) }}
		{{ Form::close() }}
	</div>
</div>

@endsection