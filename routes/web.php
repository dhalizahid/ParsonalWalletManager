<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class,'index']);
    Route::get('income/catagory',[IncomeCategoryController::class,'index']);
    Route::post('income/catagory/store',[IncomeCategoryController::class,'store']);
    Route::get('income/catagory/edit/{id}',[IncomeCategoryController::class,'edit']);
    Route::get('income/catagory/delete/{id}',[IncomeCategoryController::class,'destroy']);
    Route::post('income/catagory/update',[IncomeCategoryController::class,'update']);

    Route::get('income',[IncomeController::class,'index']);
    Route::post('income/store',[IncomeController::class,'store']);
    Route::get('income/edit/{id}',[IncomeController::class,'edit']);
    Route::post('income/update',[IncomeController::class,'update']);
    Route::get('income/destroy/{id}',[IncomeController::class,'destroy']);
    Route::get('income/trash',[IncomeController::class,'trash']);
    Route::get('income/{id}/delete/parmanently',[IncomeController::class,'forceDelete']);
    Route::get('income/{id}/restore',[IncomeController::class,'restore']);
    // Route::get('income/report',[IncomeController::class,'report']);
    // Route::get('incomeTable',[IncomeController::class,'table']);

    Route::get('expense/catagory',[ExpenseCategoryController::class,'index']);
    Route::post('/expense/catagory/store',[ExpenseCategoryController::class,'store']);
    Route::get('expense/catagory/edit/{id}',[ExpenseCategoryController::class,'edit']);
    Route::post('expense/catagory/update',[ExpenseCategoryController::class,'update']);
    Route::get('expense/catagory/delete/{id}',[ExpenseCategoryController::class,'destroy']);

    Route::get('/expense',[ExpenseController::class,'index']);
    Route::post('expense/store',[ExpenseController::class,'store']);
    Route::get('expense/edit/{id}',[ExpenseController::class,'edit']);
    Route::post('expense/update',[ExpenseController::class,'update']);
    Route::get('expense/delete/{id}',[ExpenseController::class,'destroy']);
    

    Route::get('report',[ReportController::class,'index']);
    Route::get('report/all',[ReportController::class,'allReport']);
    Route::post('report/all',[ReportController::class,'printAllReport']);
    Route::get('report/income',[ReportController::class,'incomeReport']);
    Route::post('report/income',[ReportController::class,'printIncomeReport']); 
    Route::get('report/expense',[ReportController::class,'expenseReport']); 
    Route::post('report/expense',[ReportController::class,'printExpenseReport']); 

    Route::get('profile/edit',[ProfileController::class,'edit']);
    Route::post('profile/update',[ProfileController::class,'update']);

});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
