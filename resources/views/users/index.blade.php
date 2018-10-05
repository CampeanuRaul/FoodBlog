@extends('main')

@section('title', '| User profile')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection


@section('content')

<div class="row" style="margin:30px 0 50px">
	<div class="col-md-8 col-md-offset-2">
		<h2 ">Hello {{Auth::user()->name}}, below you can see your profile info </h2>
		<div class="col-md-12 prof">
				<p><b>Profile image:</b></p><img  src="{{ asset('images/'. Auth::user()->image) }}">
		</div>
		<table class="table" >
			<tbody>

				<tr>
					<th>Join date:</th>
					<td>{{ Auth::user()->created_at }}</td>
				</tr>
				<tr>
					<th>Last time the account was updated:</th>
					<td>{{ Auth::user()->updated_at }} </td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>{{ Auth::user()->email }} </td>
				</tr>
				<tr>
					<th style="vertical-align: middle;" >Change password:</th>
					<td>
						{{ Form::open(['route' => ['users.password'], 'method' => 'PUT']) }}
						{{ Form::label('old_pass', 'Old password:') }}
						{{ Form::password('old_pass',  ['class' => 'form-control']) }}
						{{ Form::label('new_pass', 'New password:', ['class' => 'top']) }}
						{{ Form::password('new_pass', ['class' => 'form-control']) }}
						{{ Form::submit('Change password', ['class' => 'btn btn-primary top btn-block']) }}
						{{ Form::close() }}
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
	<div class="row buttons">
		<div class="col-md-2 col-md-offset-4"  >
			<a href="{{ route('users.edit', Auth::user()->id ) }}" class="btn btn-info btn-block">Edit account</a>
		</div>
		<div class="col-md-2" >
			<a href="{{ route('users.del', Auth::user()->id) }}" class="btn btn-danger btn-block">Delete account</a>
		</div>
	</div>

@endsection