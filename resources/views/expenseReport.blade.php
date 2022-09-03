@extends('layouts.master')
@section('content')
<form action="<?php echo $_SERVER['PHP_SELF'];?>?view=expense_repot" method="POST" enctype="multipart/form-data">
	<select name="catagory_id" id="catagory_id">
		<option value="">Select Category</option>
		<?php
        //  foreach ($categoris as $category) {?>
			<option value="<?php
                //  echo $category['id']; ?>">
				<?php 
                // echo $category['name'];?>
			</option>
		<?php 
    // } ?>
	</select>
	<label for ="from_date">From Date:</label>
	<input type="date" name="from_date">

	<label for ="to_date">To Date:</label>
	<input type="date" name="to_date">
	<input type="submit" name="submit" value="View Report">
</form>

 <div class="" style="">
	<table style="width:50%;" border="1px solid black">
		<thead>
			<tr>
				<td>Catagory Id</td>
				<td>Amount</td>
				<td>Expense Date</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				// if (is_null($report)) {
				// 	echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
				// }
				
                // foreach($expenses as $expense) {?>
				<tr>
					<td><?php 
                    // echo $expense['category_name'];?></td>
					<td><?php
                    //  echo $expense['amount'];?></td>
					<td><?php 
                    // echo $expense['expense_date'];?></td>
				</tr>
			<?php 
        // } ?>
			<tr>
      			<td colspan="2">Total</td>
      			<td>
      				<?php 
      					
                        //   echo $total_expenses[0]['amount_expense']; 
      				?>
      			</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection