<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;


use App\Models\Employee;
class EmployeeController
{

    public function create_employee(Request $request){
        $companies = Company::all(); //easiest way to pass companies into the employee view
        return view('employee', compact('companies'));
    }


    public function store_employee(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'company_id' => 'required|exists:companies,id',
        ]);

        //company_id must reference id in companies

        Employee::create($validated);
        return redirect('/');
    }

    //
}
