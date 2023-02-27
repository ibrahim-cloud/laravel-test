<?php

namespace App\Http\Controllers;

use app\Model\Employee;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\request;

class EmployeeContrroller extends Controller
{
    public function index(){
   $employees = Employee::orderBy('nom','asc')->get();
   return view('employee',compact('employees'))
    }
}
