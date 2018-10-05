@extends('main')

@section('title', '| View All Posts')

@section('hide-banner')
{{Html::style('styles/hide.css')}}
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>All posts</h1>
		<table class="table" >
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
				<tr>
					<th>{{$post->id}}</th>
					<td>{{$post->title}}</td>
					<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) < 50 ? '' : '...' }}</td>

					<td>
						<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs" >Show</a>
						<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-xs" >Edit</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection