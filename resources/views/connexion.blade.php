<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    {!! HTML::style('css/default2.css') !!}
    {!! HTML::style('css/contact.css') !!}
    
</head>
<body>

@include('header')

	<div id="form-contact" class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Contactez-moi</div>
			<div class="panel-body"> 
				{{ Form::open(['url' => 'contact']) }}
					<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
						{!! Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
						{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
						{!! Form::password('password'', null, ['class' => 'form-control', 'placeholder' => 'Votre mot de passe']) !!}
						{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
						{!! Form::password('password-check'', null, ['class' => 'form-control', 'placeholder' => 'Votre mot de passe']) !!}
						{!! $errors->first('password-check', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>

	<br>
		
	
</body>
</html>
