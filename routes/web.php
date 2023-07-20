<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get("/", [EmployeeController::class, "getEmployee"])->name("home");

Route::get("create-employee", [EmployeeController::class, "createEmployee"])->name("createEmployee");


Route::post("employee-store", [EmployeeController::class, "storeEmployee"])->name("storeEmployee");

Route::delete("employee-delete/{id}", [EmployeeController::class, "deleteEmployee"])->name("deleteEmployee");
// Route::get("/", function(){

//     return "This is home Page";
// });


// Route::get("employee/{name?}/{age}", function($name = "Ali", $age = "20"){
//     return "Employee Name: " . $name . " Age is : " . $age;
// });
