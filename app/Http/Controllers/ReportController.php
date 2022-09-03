<?php

namespace App\Http\Controllers;

// use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\Expense;
use App\Models\ExpenseCategory;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('report');
    }

    public function incomeReport()
    {
        $incomeCaragoris = IncomeCategory::all();
        return view('income.report.index',compact('incomeCaragoris'));
    }
    public function generateIncomeReport($request)
    {
        if (is_null($request->catagory_id)) {
            $incomes = Income::select('incomes.*','income_categories.name as category_id')
            ->leftJoin('income_categories','incomes.catagory_id','=','income_categories.id')
            ->where('catagory_id',$request->catagory_id)
            ->whereBetween('incame_date',[$request->DateFrom,$request->DateTo])
            ->get();

            return $incomes;
        }

        $incomes = Income::select('incomes.*','income_categories.name as category_id')
        ->leftJoin('income_categories','incomes.catagory_id','=','income_categories.id')
        ->where('catagory_id',$request->catagory_id)
        ->whereBetween('incame_date',[$request->DateFrom,$request->DateTo])
        ->get();

        return $incomes;
    }

    public function printIncomeReport(Request $request)
    {
        $incomes = $this->generateIncomeReport($request);
        $totalIncome = $incomes->sum('amount');

        return view('income.report.print',compact('incomes','totalIncome'));
    }

    public function expenseReport()
    {
        $expenseCaragoris = ExpenseCategory::all();
        return view('expense.report.index',compact('expenseCaragoris'));
    }

    public function generateExpenseReport($request){
        if (is_null($request->catagory_id)) {
            $expenses = Expense::select('expenses.*','expense_categories.name as catagory_id')
            ->leftJOin('expense_categories','expenses.catagory_id', '=' ,'expense_categories.id')
            ->where('catagory_id',$request->catagory_id)
            ->whereBetween('expense_date',[$request->DateFrom,$request->DateTo])
            ->get();

            return $expenses;
        }
        $expenses = Expense::select('expenses.*','expense_categories.name as catagory_id')
        ->leftJOin('expense_categories','expenses.catagory_id', '=' ,'expense_categories.id')
        ->where('catagory_id',$request->catagory_id)
        ->whereBetween('expense_date',[$request->DateFrom,$request->DateTo])
        ->get();

        return $expenses;
    }

    public function printExpenseReport(Request $request)
    {
        $expenses = $this->generateExpenseReport($request);
        $totalExpense = $expenses->sum('amount');

        return view('expense.report.print',compact('expenses','totalExpense'));
    }

    public function allReport()
    {
       return view('report_all');
    }

    public function printAllReport(Request $request)
    {
        $incomes = $this->generateIncomeReport($request);
        $totalIncome = $incomes->sum('amount');
        
        $expenses = $this->generateExpenseReport($request);
        $totalExpense = $expenses->sum('amount');

        return view('report_print',compact(
            'incomes',
            'totalIncome',
            'expenses',
            'totalExpense'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
