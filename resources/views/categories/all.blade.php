@extends('main')

@section('title', '| All posts')

@section('blog', 'act')

@section('content')
@include('../partials/__blogNav')
<div class="content-boxes">
@foreach($posts->all() as $post)
<div class="box">
	<img src="{{ asset('images/'. $post->image) }}" alt="{{ $post->title }}" >
	<div class="user-info">
		<img src="{{ asset('images/'. $post->user->image) }}"  alt="user profile"  >
		<div class="user-para">
			<p class="user-name">{{ $post->user->name }}</p>
			<p class="date" ><b>Date:</b> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</p>
		</div>
	</div>
	<h2>{{ $post->title }}</h2>
	<p class="food-desc" >{{ substr($post->body, 0, 150) }}{{ strlen($post->body) < 150 ? '' : '...' }}</p>
	<a href="{{ route('single', $post->id) }}" class="btn btn-info" >Read more</a>
</div>
@endforeach
</div>
<div style="text-align:center;">
	{{ $posts->links() }}
</div>
@endsection