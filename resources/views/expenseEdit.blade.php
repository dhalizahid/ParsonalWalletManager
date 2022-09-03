@extends('layouts.master')
@section('content')
{{Form::open(['url' => 'expense/update','class'=>'form-horizontal'])}}
	<h3>Expense Update Page</h3>
	<input type="hidden" name="id" value="{{$expense->id}}">
	<input type="text" name="catagory_id" value="{{$expense->catagory_id}}">
	<input type="text" name="amount"  value="{{$expense->amount}}">
	<input type="text" name="description" value="{{$expense->description}}">
	<input type="date" name="expense_date" value="{{$expense->expense_date}}">
	<input type="submit" name="submit" value="Update Expense">
{{Form::close()}}
@endsection
