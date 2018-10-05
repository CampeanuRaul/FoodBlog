@extends('main')

@section('title', '| Create Post')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="top">Create New Post</h1>
		<hr>
		{{ Form::open(['route' => ['posts.store'] , 'method' => 'POST', 'files' => 'true']) }}
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		{{ Form::label('category_id', 'Category:', ['class' => 'top']) }}
		<select name="category_id" class="form-control" >
			@foreach($categories as $category)
				<option value="{{ $category->id }}" >{{ $category->name }}</option>
			@endforeach
		</select>
		{{ Form::label('image', 'Image:', ['class' => 'top']) }}
		{{ Form::file('image')}}
		{{ Form::label('body', 'Description:', ['class' => 'top']) }}
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		{{ Form::submit('Create Post', ['class' => 'btn btn-success top btn-block black']) }}

		{{ Form::close() }}
	</div>
</div>

@stop