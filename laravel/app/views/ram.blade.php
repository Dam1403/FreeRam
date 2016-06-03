@extends('layout')

@section('content')
@if($errors->has())
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif
<h3>Submit your ram request</h3>
{{ Form::open(array('url' => 'http://localhost:8001/ram')) }}


  {{ Form::label('ram_amount', 'Ram amount in Bytes') }}
  {{ Form::number('ram_amount',Input::old('ram_amount'),array('placeholder'=>'Ex. 1048576')) }}

  {{ Form::label('resolution', 'Resolution') }}
  {{ Form::text('resolution',Input::old('resolution'),array('placeholder'=>'Ex. 1920x1080')) }}
  
  {{ Form::submit() }}
{{ Form::close() }}

@stop
