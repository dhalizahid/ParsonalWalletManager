@extends('layouts.master')
@section('content')
<div class="container">
	<form  action="index.php?view=income_repot" method="POST" enctype="multipart/form-data">
		<select name ="catagory_id" id="catagory_id">
			<option value ="">Select Category</option>
			<?php 
            // foreach ($categoris as $category_in) {
                ?>
				<option value ="<?php
                //  echo $category_in['id']; 
                 ?>">
					<?php 
                    // echo $category_in['name'];
                    ?>
				</option>
			<?php
        //  } 
         ?>
		</select>
		<label for ="from_date">From Date:</label>
		<input type="date" name="from_date" >

		<label for ="to_date">To Date:</label>
		<input type="date" name="to_date" >
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
                // foreach($incomes as $income) {
                    ?>
					<tr>
						<td><?php 
                        // echo $income['category_name'];
                        ?></td>
						<td><?php 
                        // echo $income['amount'];
                        ?></td>
						<td><?php 
                        // echo $income['incame_date']; 
                        ?></td>
					</tr>
				<?php 
            // }
             ?>
				<tr>	
	      			<td>Total Income</td>
	      			<td>
	      				<?php 
      						// echo $total[0]['total_income']; 
      					?>
	      			</td>
				</tr>	
			</tbody>
		</table>
	</div>
</div>
@endsection