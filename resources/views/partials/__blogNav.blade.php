<div class="categories">
	<ul>
		<li><a href="{{ route('category.all') }}">All Posts</a></li>
		@foreach($categories as $category)
		<li><a href="{{ route('category.show', $category->id) }}">{{$category->name}}</a></li>
		@endforeach
	</ul>
	<a href="{{ route('posts.create') }}" class="btn btn-primary" >Create Post</a>
</div>