@extends('main')

@section('title', '| View Post')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="desc" style="margin:20px 0;text-align: center;" >{{$post->title}}</h1>
		<img class="single-img" src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}"  style="margin:0 auto;display:block;" >
		<p class="single" >{{ $post->body }} </p>
	</div>
	
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>This post has <small>{{ $post->comments->count() }} comments</small></h2>
		@foreach($post->comments as $comment)
		<div class="col-md-12 around">
		<p><b>From: </b>{{$comment->name}}</p>
		<p class="top" ><b>Message: </b> {{ $comment->body }} </p>
		</div>
		@endforeach
	</div>
</div>
<div class="row" style="margin:40px 0" >
	<div class="col-md-8 col-md-offset-2">
		<h1>Comment:</h1>
		{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
		{{ Form::label('name', 'Name:', ['class' => 'top']) }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
		{{ Form::label('email', null, ['class' => 'top'] ) }}
		{{ Form::text('email', null, ['class' => 'form-control']) }}
		{{ Form::label('body', 'Comment:', ['class' => 'top']) }}
		{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '6']) }}
		{{ Form::submit('Submit', ['class' => 'btn btn-primary top']) }}
		{{ Form::close() }}
	</div>
</div>

@endsection