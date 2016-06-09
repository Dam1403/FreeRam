@extends('layout')

@section('content')
{{ Form::open(array('url' => 'http://localhost:8001/complain')) }}
<p>
We apologize but are not responsible for any inconvience or loss of life,related to the use
of FreeRam.com.
</p>
{{ Form::label('complaintEmail', 'Email') }}
{{ Form::text('complaintEmail',Input::old('complaintEmail')) }}
<!--FIX with CSS -->

{{ Form::label('complaint', 'Complain Here') }}
{{ Form::textarea('complaint',Input::old('complaint'),array('rows'=>4,'cols'=>50)) }}

{{ Form::submit() }}
{{ Form::close() }}
@stop
