@extends('layout')

@section('content')
	<div class="jumbotron">
		<div class="container">
			<h2>欢迎来到Laravel社区
				<a class="btn btn-primary btn-lg pull-right">发布新的帖子</a>
			</h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9" role='main'>
				@foreach ($discussions as $discussion)
					<div class="media">
						<a class="media-left" href="#">
							<img class="media-object img-circle" alt="Image" src="{{ $discussion->user->avatar }}">
						</a>
						<div class="media-body">
							<h4 class="media-heading"><a href="/discussions/{{ $discussion->id }}">{{ $discussion->title }}</a></h4>
							<p>{{ $discussion->user->name }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@stop