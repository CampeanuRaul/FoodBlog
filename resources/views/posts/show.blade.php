@extends('main')

@section('title', '| View post')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div style="text-align:center">
			<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" style="display:inline-block"  >Edit</a>
			{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE', 'style' => 'display:inline-block']) }}
			{{ Form::submit('Delete', ['class' => 'btn btn-danger', ]) }}
			{{ Form::close() }}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="desc" style="margin:20px 0;text-align: center;" >{{$post->title}}</h1>
		<img class="single-img" src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}"  style="margin:0 auto;display:block;" >
		<p class="single" >{{ $post->body }} </p>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Comments<small> {{$post->comments->count()}} total </small></h2>
		<table class="table" >
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Comment</th>
					<th></th>
				</tr>
			</thead>	
			<tbody>
				@foreach($post->comments as $comment)
				<tr>
					<th>{{ $comment->id }}</th>
					<td>{{ $comment->name }}</td>
					<td>{{ $comment->body }}</td>
					<td>
						<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-info btn-xs" >Edit</a>
						<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-danger btn-xs" >Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection