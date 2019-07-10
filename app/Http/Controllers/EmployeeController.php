<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
     public function index(){
        return view('app');
    }
     public function show(){
     	$employee1 =Employee::all();
        return view('displayall')->with(compact('employee1'));

    }
    public function create(Request $request)
    {
    	$employee=new Employee();
    	$employee->name=request('name');
    	$employee->email=request('email');
    	$employee->address=request('address');
    	$employee->designation=request('designation');
    	$employee->phoneno=request('phoneno');
    	$employee->save();
        
    }
}
