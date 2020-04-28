


<h1>login</h1>
{!! Form::open(['method' => 'post','action' => 'UsersController@login']) !!}
    {{ Form::label('email', 'E-Mail Address') }}
    {{ Form::text('email', null) }}
    {{ Form::label('password', 'Enter Password') }}
    {{ Form::password('password', ['class' => 'awesome']) }}
    {{  Form::submit('Click Me!') }}
{!! Form::close() !!}
<a href="users/forgotPassword">forgot password</a>