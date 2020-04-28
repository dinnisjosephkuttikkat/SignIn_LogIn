
<h1>Sign In</h1>
{!! Form::open(['method' => 'post','action' => 'UsersController@signUp']) !!}
    {{ Form::label('email', 'E-Mail Address') }}
    {{ Form::text('email', null) }}
    {{ Form::label('password', 'Enter Password') }}
    {{ Form::password('password', ['class' => 'awesome']) }}
    {{ Form::label('password', 'Re-Enter Password') }}
    {{ Form::password('password', ['class' => 'awesome']) }}
    {{ Form::label('name', 'enter name') }}
    {{ Form::text('name', null) }}
    {{ Form::label('phone', 'Enter Phone') }}
    {{ Form::number('phone', null) }}
    {{  Form::submit('Click Me!') }}
{!! Form::close() !!}