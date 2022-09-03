@extends('layouts.master')
@section('content')
{{Form::open(['url'=> 'expense/catagory/update','class' => 'form-horizontal'])}}
	<h3>Expense Category Edit Page</h3>
	<input type="hidden" name="id" value="{{$catagory->id}}">
	<input type="text" name="name" value="{{$catagory->name}}">
	<input class="btn btn-success btn-sm" type="submit" name="submit" value="Update Expense Category">
	{{Form::close()}}
@endsection