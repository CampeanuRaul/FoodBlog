@extends('main')

@section('title', '| Edit Comment')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
		{{ Form::label('name', 'Name:', ['class' => 'top']) }}
		{{ Form::text('name', null, ['class' => 'form-control', 'disabled']) }}
		{{ Form::label('email', 'Email:', ['class' => 'top']) }}
		{{ Form::text('email', null, ['class' => 'form-control', 'disabled']) }}
		{{ Form::label('body', 'Comment:', ['class' => 'top']) }}
		{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '6']) }}
		{{ Form::submit('Update', ['class' => 'btn btn-primary top']) }}
		{{ Form::close() }}
	</div>
</div>

@endsection