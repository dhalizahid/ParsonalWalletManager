@extends('layouts.master')
@section('content')

@if(Session::has('Message'))
    {{ Session::get('Message') }}
@endif
{{Form::open(['url'=>'income/catagory/store', 'class' => 'form-horizontal' ])}}
<h3>Income Category Page</h3>
    <input type="text" name="name" placeholder="Income Category">
    <input class="btn btn-success btn-sm" type="submit" name="submit" value="Add Category">
{{Form::close()}}
<table border="1px solid black">
    <thead>
            <tr>
                <td>Id</td>
                <td>Catagory</td>
                <td>Action</td>
            </tr>
        <tr>
            <td colspan="3"><a class="btn btn-danger btn-sm" href="controller/IncomeCategory.php?action=all_delete">All Data Delete</a></td>
        </tr>
    </thead>
    <tbody>
        <?php
        if (is_null($incomeCategoris)) {
        	echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
        }
        ?>
        @foreach($incomeCategoris as $catagory)
        
        <tr>
            <td>{{$catagory->id}} </td>
            <td>{{$catagory->name}}</td>
            <td> 
                <a class="btn btn-warning btn-sm" href="/income/catagory/edit/{{$catagory->id }}">Edit</a>

                <a class="btn btn-danger btn-sm" href="/income/catagory/delete/{{$catagory->id}}">Delete</a>
            </td>
        </tr>
        @endforeach

        
        <?php
        // } 
        ?>
    </tbody>
</table>
@endsection