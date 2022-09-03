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
<h3>Income Page</h3>
<a href="/income" class="btn btn-info "><< Back To List</a>
<!-- <a href="view/income_table.php">Income Table</a> -->
<div class="contanner">
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
				<td colspan="6"><a align="center" class="btn btn-danger " href="controller/Income.php?action=all_delete">All Data Delete</a></td>
			</tr>
		</thead>
		<tbody>
			<?php
			if (is_null($trashedIncome)) {
				echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			}
			?>

			@foreach($trashedIncome as $income)
			<tr>
				<td>{{$income->id}}</td>
				<td>{{$income->catagory_id}}</td>
				<td>{{$income->amount}}</td>
				<td>{{$income->description}}</td>
				<td>{{$income->incame_date}}</td>
				<td>{{$income->created_at}}</td>
				<td>{{$income->updated_at}}</td>
				<td>
					<a class="btn btn-danger" href="/income/{{$income->id}}/delete/parmanently">Parmanently Delete</a>
					<a class="btn btn-warning" href="/income/{{$income->id}}/restore">Restore</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection