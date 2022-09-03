<style>
	.input {
		outline: none;
		height: 25px;
		border-color: #88cb88;
	}

	select {
		outline: none;
		height: 31px;
		width: 200px;
		border-color: #88cb88;
	}

	.btn {
		height: 31px;
		background-color: green;
		border: none;
		padding: 2px 10px;
		cursor: pointer;
		border-radius: 5px;
	}
</style>
@extends('layouts.master')
@section('content')
<h1>This is income page</h1>
@if(Session::has('Message'))
{{Session::get('Message')}}
@endif
{{Form::open(['url' =>'/income/store','class'=>'form-horizontal'])}}
<h3>Income Page</h3>
<select name="catagory_id" id="catagory_id" required>
	<option value="">Select Category</option>

	@foreach ($incomeCatagoris as $catagory)
	<option value="{{$catagory->id}}">{{$catagory->name}}</option>
	@endforeach
</select>
<input type="text" class="input" name="amount" placeholder="Amount">
<input type="text" class="input" name="description" placeholder="Description">
<input type="date" class="input" name="incame_date" placeholder="incame_date">
<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Add Income">
{{Form::close()}}
<!-- <a href="view/income_table.php">Income Table</a> -->
<div class="contanner">
	<a class="btn btn-info " href="/income/trash">View Trash</a>
	<table border="1px solid black" class="col-md-12 ">
		<thead>
			<tr>
				<td>Id</td>
				<td>Catagory Name</td>
				<td>Amount</td>
				<td>Description</td>
				<td>Incame Date</td>
				<td>Create At</td>
				<td>Updated At</td>
				<td>Operation</td>
			</tr>
			<tr>
				<td colspan="2"><a align="center" class="btn btn-danger " href="controller/Income.php?action=all_delete">All Data Delete</a></td>
			</tr>
		</thead>
		<tbody>
			<?php
			if (is_null($incomes)) {
				echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			}
			?>

			@foreach($incomes as $catagory)
			<tr>
				<td>{{$catagory->id}}</td>
				<td>{{$catagory->catagory_name}}</td>
				<td>{{$catagory->amount}}</td>
				<td>{{$catagory->description}}</td>
				<td>{{$catagory->incame_date}}</td>
				<td>{{$catagory->created_at}}</td>
				<td>{{$catagory->updated_at}}</td>
				<td>
					<a class="btn btn-warning" href="/income/edit/{{$catagory->id}}">Edit</a>

					<a class="btn btn-danger" href="/income/destroy/{{$catagory->id}}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection