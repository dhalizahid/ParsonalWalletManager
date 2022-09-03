@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <a href="/report" class="btn btn-primary"><< Back</a>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Income Report</h1>
      </div>

      <table class="table table-responsive table-stripped table-bordererd">
        <thead>
          <tr>
            <th>Category</th>
            <th>Description</th>
            <th>Amount</th>
          </tr>
        </thead>

        <tbody>
          @foreach($incomes as $income)
          <tr>
            <td>{{ $income->category_id }}</td>
            <td>{{ $income->description }}</td>
            <td>{{ $income->amount }}</td>
          </tr>
          @endforeach
        </tbody>

        <tfoot>
          <th></th>
          <th>Total Income</th>
          <th>{{ $totalIncome }}</th>
        </tfoot>
      </table>

      <button class="btn btn-primary" onclick="window.print()">Print</button>
    </main>
@endsection 