<h1>forgot Password</h1>
{!! Form::open(['method' => 'post','action' => 'UsersController@forgotPassword']) !!}
    {{ Form::label('email', 'Enter Registered Email') }}
    {{ Form::text('email', null) }}
    {{  Form::submit('Click Me!') }}
{!! Form::close() !!}