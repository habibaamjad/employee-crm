<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employee;

class EmployeeController extends Controller
{
    public function getEmployee(){
        $employees = Employee::orderBy("id", "DESC")->get();
        return view("employeeList", compact("employees"));
    }

    public function createEmployee(){
        return view("createEmployee");
    }

    public function storeEmployee(Request $request){

        $request->validate([
            "name" => "required",
            "phone" => "required",
            "email" => "required",
            "designation" => "required",
            "department" => "required",
            "address" => "required"
        ]);


        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->phone = $request->input("phone");
        $employee->email = $request->input("phone");
        $employee->designation = $request->input("designation");
        $employee->department = $request->input("department");
        $employee->address = $request->input("address");

        $employee->save();



        return back();
    }


    public function deleteEmployee($id){
        Employee::find($id)->delete();
        return back()->with("message", "Employee has removed successfully!");
    }
}
