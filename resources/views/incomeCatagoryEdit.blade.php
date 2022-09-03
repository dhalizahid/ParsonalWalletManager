@extends('layouts.master')
@section('content')
{{Form::open(['url'=>'income/catagory/update', 'class'=>'form-horizontal'])}}
	<h3>Income Category Edit Page</h3>
	<input type="hidden" name="id" value="{{$catagory->id}}">
	<input type="text" name="name" placeholder="Income Category" value="{{$catagory->name}}">
	<input type="submit" name="submit" value="Update Income Category">
{{Form::close()}}

@endsection