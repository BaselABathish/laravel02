<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Assistant;
use App\Models\Employee;
use App\Models\File;
use App\Models\Vector_store;

use Illuminate\Http\Request;

class home
{
    public function main(Request $request){
        $companies = Company::all();
        $employees = Employee::all();
        $files = File::all();
        $vector_stores = Vector_store::all();
        $assistants = Assistant::all();
        return view('home', compact('companies', 'employees', 'files', 'vector_stores', 'assistants'));
    }

    //
}
