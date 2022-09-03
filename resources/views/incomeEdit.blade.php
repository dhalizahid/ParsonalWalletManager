@extends('layouts.master')
@section('content')
{{Form::open(['url'=> 'income/update','class' => 'form-horizontal'])}}
	<h3>Income Update Page</h3>
	<input type="hidden" name="id" value="{{$income->id}}">
	 <select name="catagory_id" id="catagory_id" required>
		<option value="">Select Category</option> 
        @foreach ($incomeCatagoris as $category) 
			@if($income->catagory_id == $category->id)
				<option value="{{$category->id}}"selected >
					{{$category->name}}
				</option>
			@else
				<option value="{{$category->id}}" >
					{{$category->name}}
				</option>
			@endif
		@endforeach
	</select>
	<input type="text" name="amount"  value="{{$income->amount}}">
	<input type="text" name="description" value="{{$income->description}}">
	<input type="date" name="incame_date" value="{{$income->incame_date}}">
	<input class="btn btn-primary" type="submit" name="submit" value="Update Income">
	{{Form::close()}}
	@endsection
