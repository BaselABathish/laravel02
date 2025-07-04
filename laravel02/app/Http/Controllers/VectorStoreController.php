<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Vector_store;
use Illuminate\Http\Request;

class VectorStoreController
{

    public function create_vector_store(Request $request) {
        $companies = Company::all();
        return view('vector_store', compact('companies'));
    }


    public function store_vector_store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        Vector_store::create($validated);
        return redirect('/');
    }
    //
}
