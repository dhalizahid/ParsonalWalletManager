@extends('layouts.master')
@section('content')
<div class="container">
	<h3 class="header">Total Income or Expense Page</h3>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>?view=total_repot" method="POST" enctype="multipart/form-data">
		<label for="from_date">From Date:</label>
		<input type="date" name="from_date">
		<label for="to_date">To Date:</label>
		<input type="date" name="to_date">
		<input class="btn-primary" type="submit" name="submit" value="View Report">
	</form>
</div>

<div class="container" style="display: flex;">
	<div class="" style=" margin-right:50px;">
		<table style="width: 400px; " border="1px solid black">
			<thead>
				<h3>Income Category</h3>
				<tr>
					<td>Catagory Id</td>
					<td>Amount</td>
					<td>Incame Date</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					// if (is_null($incomes)) {
					// 	echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
					// }
					
                    // if (isset($incomes)) {
						
						
                        // foreach($incomes as $income) {?>
						<tr>
							<td><?php
                            //  echo $income['catagory_id']; ?></td>
							<td><?php
                            //  echo $income['amount']; ?></td>
							<td><?php 
                            // echo $income['incame_date']; ?></td>
						</tr>
				<?php 
            // }} ?>
				<tr>	
	      			<td>Total Income</td>
	      			<td>
	      				<?php 
	      					
                            //   if (isset($total_incomes)) {
	      					 	
                                // echo $total_incomes[0]['total_incomes']; 
	      					
                            // }
	      				?>
	      			</td>
				</tr>	
			</tbody>
		</table>
	</div>
	<div class="" style="">
		<table style="width: 400px;" border="1px solid black">
			<thead>
				<h3>Expence Category</h3>
				<tr>
					<td>Catagory Id</td>
					<td>Amount</td>
					<td>Expense Date</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					// if (is_null($expenses)) {
					// 	echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
					// }
					
                    // if (isset($expense)) {
						
                        // foreach($expenses as $expense) {?>
						<tr>
							<td><?php 
                            // echo $expense['catagory_id']; ?></td>
							<td><?php 
                            // echo $expense['amount']; ?></td>
							<td><?php
                            //  echo $expense['expense_date']; ?></td>
						</tr>
				<?php
            //  }} ?>
				<tr>	
	      			<td>Total Expense</td>
	      			<td>
	      				<?php 
      						// if (isset($total_expense)) {
      							// echo $total_expense[0]['total_expense']; 
      						// }
	      				?>
	      			</td>
				</tr>
			</tbody>
		</table>
		Rest Amount=
		<?php 
		//  echo $rest_amount; 
		?>
	</div>
    <!--  -->
	<div>
		<form enctype="multipart/form-data" action="print.php" method="POST">
	    	<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
	    	File to print: <input type="printfile" type="file" />
	    	<input type="submit" value="Print File" />
		</form>
	</div>
</div>
@endsection
