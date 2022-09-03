@extends('layouts.master')
@section('content')
<table border="1px solid black" class="col-md-8 offset-md-2">
	<thead>
		<tr>
			<td>Id</td>
			<td>Catagory Name</td>
			<td>Amount</td>
			<td>Description</td>
			<td>Incame Date</td>
			<td>Operation</td>
		</tr>
		<tr>
			<td colspan="6"><a align="center" class="btn btn-danger " href="controller/Income.php?action=all_delete">All Data Delete</a></td>
		</tr>
	</thead>
	<tbody>
		<?php 
			// if (is_null($incomes)) {
			// 	echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			// }
			// foreach($incomes as $category) {?>
			<tr>
				<td><?php 
                // echo $category['id'];
                ?></td>
				<td><?php 
                // echo $category['category_name'];
                 ?></td>
				<td><?php 
                // echo $category['amount'];
                 ?></td>
				<td><?php
                //  echo $category['description'];
                  ?></td>
				<td><?php
                //  echo $category['incame_date']; 
                ?></td>
				<td>
					<a class="btn btn-warning" href="/incomeEdit">Edit</a>

					<a class="btn btn-danger" href="controller/Income.php?action=delete&id=<?php 
                    // echo $category['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php
    //  } ?>
	</tbody>
</table>
@endsection
