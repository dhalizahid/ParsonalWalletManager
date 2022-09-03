<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;


class IncomeController extends Controller
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
        $incomeCatagoris = IncomeCategory::all();
        $incomes = Income::select(
            'incomes.id',
            'income_categories.name as catagory_name',
            'incomes.amount',
            'incomes.description',
            'incomes.incame_date',
            'incomes.created_at',
            'incomes.updated_at',
            'incomes.deleted_at'
        )
        ->leftJoin('income_categories','incomes.catagory_id', '=','income_categories.id')
        ->get();
        return view('income',compact('incomeCatagoris','incomes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Income::create($request->all());
            return back()->with('Message','Income Add Success fully');
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
       $incomeCatagoris = IncomeCategory::all();
       $income = Income::find($id);
       return view('incomeEdit',compact('income','incomeCatagoris'));
    }
    public function update(Request $request)
    {
        Income::find($request->id)->update($request->all());

       return back();
    }

    public function table(){
        return view('incomeTable');
    }

    public function report(){
        return view('incomeReport');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Income::find($id)->delete();
        return $this->index();
    }

    public function destroyAll()
    {
        Income::withTrashed()->delete();
        return $this->index();
    }

    public function trash(){
        $trashedIncome = Income::onlyTrashed()->get();
        return view('trash',compact('trashedIncome'));
    }

    public function forceDelete($id){
        Income::withTrashed()->where('id',$id)->forceDelete();
        return back(); 
    }

    public function restore($id){
        Income::withTrashed()->where('id',$id)->restore();
        return back();
    }

    public function restoreAll()
    {
        Income::withTrashed()->restore();
        return $this->index();
    }
}
