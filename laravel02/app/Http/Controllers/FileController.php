<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Vector_store;
use Illuminate\Http\Request;

use App\Models\File;

class FileController
{
    public function create_file(Request $request) {
        $vector_store = Vector_store::all();
        $employees = Employee::all();
        return view('file', compact('vector_store', 'employees'));
    }

    public function store_file(Request $request) {
       $validated = $request->validate([
            'filename'=> 'required',
            'uploader_id'=> 'required|exists:employees,id',
           'vector_store_id'=> 'required|exists:vector_stores,id',
        ]);


        File::create($validated);
        return redirect('/');


    }
    //
}
