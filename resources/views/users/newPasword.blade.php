<h1>new password page</h1>
{!! Form::open(['method' => 'post','action' => 'UsersController@newPassword']) !!}

    {{ Form::label('password', 'Enter Password') }}
    {{ Form::password('password', null) }}
    {{ Form::label('password1', 'Re-Enter Password') }}
    {{ Form::password('password1', ['class' => 'awesome']) }}
    {{  Form::submit('Click Me!') }}
{!! Form::close() !!}
