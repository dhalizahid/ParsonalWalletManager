@extends('layouts.master')
@section('content')
<div class="container">
	@if(Session::has('Message'))
	{{ Session::get('Message') }}
	@endif
	{{Form::open(['url' =>'/expense/store','class'=>'form-horizontal'])}}
	<h3 align="center">Expence Page</h3>
	<select name="catagory_id" id="catagory_id" required>
		<option value="">Select Category</option>
		@foreach ($expenseCatagory as $catagoris)
		<option value="{{$catagoris->id}}">{{$catagoris->name}}</option>
		@endforeach
	</select>
	<input type="text" name="amount" placeholder="Amount">
	<input type="text" name="description" placeholder="Description">
	<input type="date" name="expense_date">
	<input class="btn btn-success btn-sm" type="submit" name="submit" value="Add Expense">
	{{Form::close()}}
	<table border="1px solid black" class="col-md-8 offset-md-2">
		<thead>
			<tr>
				<td>Id</td>
				<td>Catagory Id</td>
				<td>Amount</td>
				<td>Description</td>
				<td>Expense Date</td>
				<td>Operation</td>
			</tr>
			<tr>
				<td colspan="6"><a class="btn btn-danger" href="controller/ExpenseCategory.php?action=all_delete">All Data Delete</a></td>
			</tr>
		</thead>
		<tbody>
			<?php
			if (is_null($expenses)) {
				echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			}
			?>

			@foreach($expenses as $expense)

			<tr>
				<td>{{$expense->id}}</td>
				<td>{{$expense->catagory_name}}</td>
				<td>{{$expense->amount}}</td>
				<td>{{$expense->description}}</td>
				<td>{{$expense->expense_date}}</td>
				<td>
					<a class="btn btn-warning" href="/expense/edit/{{$expense->id}}">Edit</a>

					<a class="btn btn-danger" href="/expense/delete/{{$expense->id}}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection