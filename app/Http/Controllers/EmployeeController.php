<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::all();
    
        return view('employee',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $employees = Employee::orderBy('nom','asc')->get();
        // return view('employee',compact('employees'))
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Employee::all();

        return view('createEmployee',compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "phone"=>"required"
        ]);
        // Employee::create($request->all());
        Employee::create([
                "nom"=>$request->nom,
                "prenom"=>$request->prenom,
                "email"=>$request->email,
                "phone"=>$request->phone,

        ]);
        return back()->with('success',"Employee ajouter avec succee");
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {        $data = Employee::all();

        return view('editEmployee',compact('employee', 'data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "phone"=>"required"
        ]);
        // Employee::create($request->all());
        $employee->update([
                "nom"=>$request->nom,
                "prenom"=>$request->prenom,
                "email"=>$request->email,
                "phone"=>$request->phone,

        ]);
        return back()->with('success',"Employee mis a jour avec succee");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('successDelete' , "employee suprimer avec succces");
    }
    // public function delete(Employee $employee)
    // {
    //     $employee->delete();
    //     return back()->with('successDelete' , "employee suprimer avec succces");
    // }
}
