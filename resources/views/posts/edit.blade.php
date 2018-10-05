@extends('main')

@section('title', '| Edit Post')

@section('hide-banner')
{!! Html::style('styles/hide.css') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2" >
		<h1>Edit the post</h1>
		{{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true', 'style' => 'margin-bottom:50px;']) }}
		{{ Form::label('title', 'Title:', ['class' => 'top']) }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		{{ Form::label('image', 'Image:', ['class' => 'top']) }}
		{{ Form::file('image') }}
		{{ Form::label('body', 'Description:', ['class' => 'top']) }}
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		{{ Form::submit('Update', ['class' => 'btn btn-success top btn-block']) }}
		{{ Form::close() }}
	</div>
</div>

@endsection