<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Income;
use Exception;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
       $expenseCatagory = ExpenseCategory::all();
       $expenses =  Expense::select(
           'expenses.id',
           'expense_categories.name as catagory_name',
           'expenses.amount',
           'expenses.description',
           'expenses.expense_date',
           'expenses.created_at',
           'expenses.updated_at'
       )
       ->leftJOin('expense_categories','expenses.catagory_id','=','expense_categories.id')
       ->get();
       return view('expense' ,compact('expenses','expenseCatagory'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('expense');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return "this is store page";
        try {
            Expense::create($request->all());
            return back()->with('Message','Add Catagory Successfully !');
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expenseCatagoris = ExpenseCategory::all();
        $expense = Expense::find($id);
        return view('expenseEdit',compact('expenseCatagoris','expense',$this->index()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Expense::find($request->id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();
        return $this->index();
    }
}
