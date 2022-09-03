<?php

namespace App\Http\Controllers;

use App\Models\IncomeCategory;
use Exception;
use Illuminate\Http\Request;

class IncomeCategoryController extends Controller
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
        $incomeCategoris = IncomeCategory::all();
        return view('incomeCatagory',compact('incomeCategoris'));
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
        // return $request->all();
        try {
            IncomeCategory::create($request->all());
            return back()->with('Message','Add Catagory Successfully !');
        } catch (Exception $e) {
            $e->getMessage();
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagory = IncomeCategory::find($id);
        return view('incomeCatagoryEdit',compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        IncomeCategory::find($request->id)->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IncomeCategory::find($id)->delete();
        return $this->index();
    }
}
