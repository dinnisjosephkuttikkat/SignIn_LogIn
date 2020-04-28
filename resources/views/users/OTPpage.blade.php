<h1>Check OTP page</h1>
{!! Form::open(['method' => 'post','action' => 'UsersController@checkOTP']) !!}

    {{ Form::label('otp', 'Enter Your OTP') }}
    {{ Form::number('otp', null) }}
    {{  Form::submit('Click Me!') }}
{!! Form::close() !!}