@extends('layout')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<div class="media">
				<a class="btn btn-primary btn-lg pull-right">编辑帖子</a>
				<a class="media-left">
					<img class="media-object img-circle" src="{{ $discussion->user->avatar }}" alt="Image">
				</a>
				<div class="media-body">
					<h4 class="media-heading">{{ $discussion->title }}</h4>
					<p>{{ $discussion->user->name }}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-9" role='main'>
					<div class="blog-post">
						{{ $discussion->body }}
					</div>	
				</div>
			</div>
		</div>
	</div>
@stop