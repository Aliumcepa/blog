
<html>
<head>
<title>PHP Form Validation</title>
</head>

<body>



<h1>{{'USER REGISTRATION FORM'}}</h1>


{!! Form::open(['url' => '/laravel/public/get', 'method' => 'post', 'role' => 'form']) !!}

<div class="row">
{!!
Form::text('name','',array('placeholder' => 'Enter Your Name',
    'class' => 'form-control' )) !!}<br>
</div>

<div class="row">
{{ Form::label('email', 'Email') }}
    {!!
   Form::text('email','',array('placeholder' => 'Enter Your Email',
        'class' => 'form-control' )) !!}<br>
</div>

<div class="row">
{{ Form::label('password','Password') }}
Form::text('email','',array('placeholder' => 'Enter Your Email',
        'class' => 'form-control' )) !!}<br>
</div>

<div class="row">

{{Form::file('File')}}
{{Form::submit('Submit')}}
</div>

{!! Form::close() !!}
</body>
</html>