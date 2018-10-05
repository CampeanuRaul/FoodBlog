@extends('main')

@section('title', '| Delete comment')

@section('hide-banner')
{{ Html::style('styles/hide.css') }}
@endsection

@section('content')


<div class="row" style="margin:50px 0 70px" >
	<div class="col-md-8 col-md-offset-2">
		<h2 style="text-align:center;" >You sure want to delete this comment?</h2>
		{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE' ]) }}
		{{ Form::submit('Yes, I\'m sure', ['class' => 'btn btn-danger btn-block top']) }}
		{{ Form::close() }}
	</div>
</div>

@endsection