@extends('layouts.master')
@section('content')
<div class="container">
    <h3>Expense Category Page</h3>
    @if(Session::has('Message'))
        {{ Session::get('Message') }}
    @endif
    {{Form::open(['url'=> 'expense/catagory/store','class' => 'form-horizontal'])}}
        <input type="text" name="name" placeholder="Expense Category">
        <input class="btn btn-success btn-sm" type="submit" name="submit" value="Add Expense Category">
    {{Form::close()}}
        <table border="1px solid black">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Operation</td>
            </tr>
            <tr>
                <td colspan="3"><a class="btn btn-danger btn-sm" href="controller/expense_category.php?action=all_delete">All Data Delete</a></td>
            </tr>
        </thead>
        <tbody>
             @foreach($expenseCatagoris as $category) 
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/expense/catagory/edit/{{$category->id}}">Edit</a>

                        <a class="btn btn-danger btn-sm" href="/expense/catagory/delete/{{$category->id}}">Delete</a>
                    </td>
                </tr>
          @endforeach
        </tbody>
    </table>
    @endsection
</div>