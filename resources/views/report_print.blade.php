@extends('layouts.master')
@section('content')
    <main class="col-md-8 offset-md-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="text-center">Total Report</h1>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <table class="table table-responsive table-bordered table-stirpped table-condensed">
            <thead>
              <tr>
                <th colspan="4" class="text-center">Income</th>
              </tr>
              <tr>
                <th>Category</th>
                <th>Description</th>
                <th>Date</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach($incomes as $income)
              <tr>
                <th>{{ $income->Category }}</th>
                <th>{{ $income->Description }}</th>
                <th>{{ $income->IncomeDate }}</th>
                <th>{{ $income->Amount }}</th>
              </tr>
              @endforeach
            </tbody>

            <tfoot>
              <tr>
                <th colspan="3">Total Income</th>
                <th>{{ $totalIncome }}</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <table class="table table-responsive table-bordered table-stirpped table-condensed">
            <thead>
              <tr>
                <th colspan="4" class="text-center">Expense</th>
              </tr>
              <tr>
                <th>Category</th>
                <th>Description</th>
                <th>Date</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach($expenses as $expense)
              <tr>
                <th>{{ $expense->Category }}</th>
                <th>{{ $expense->Description }}</th>
                <th>{{ $expense->ExpenseDate }}</th>
                <th>{{ $expense->Amount }}</th>
              </tr>
              @endforeach
            </tbody>

            <tfoot>
              <tr>
                <th colspan="3">Total Expense</th>
                <th>{{ $totalExpense }}</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-xs-4 offset-xs-4">
          <table class="table table-responsive table-bordered table-stirpped">
            <thead>
              <tr>
                <th>Total Income</th>
                <th>{{ $totalIncome }}</th>
              </tr>
              <tr>
                <th>Total Expense</th>
                <th>{{ $totalExpense }}</th>
              </tr>
              <tr>
                <th>Rest Amount</th>
                <th>{{ $totalIncome - $totalExpense }}</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <a href="/report" class="btn btn-info text-left"><< Back</a>
      <button class="btn btn-primary text-right" type="button" onclick="window.print()">Print</button>
      
    </main>
@endsection