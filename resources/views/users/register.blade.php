@extends('layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-6 col-md-offset-3" role='main'>
					{!! Form::open(['url' => '/user/register', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
					
					    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					        {!! Form::label('name', '用户名') !!}
					        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        <small class="text-danger">{{ $errors->first('name') }}</small>
					    </div>
						
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						    {!! Form::label('email', '邮箱') !!}
						    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => '如: foo@bar.com']) !!}
						    <small class="text-danger">{{ $errors->first('email') }}</small>
						</div>
						
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						    {!! Form::label('password', '密码') !!}
						    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
						    <small class="text-danger">{{ $errors->first('password') }}</small>
						</div>
							
						<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
						    {!! Form::label('password_confirmation', '确认密码') !!}
						    {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
						    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
						</div>
				        {!! Form::submit("马上注册", ['class' => 'btn btn-success form-control']) !!}
					
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop