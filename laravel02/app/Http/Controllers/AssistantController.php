<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assistant;
use Illuminate\Http\Request;


use App\Models\Company;
class AssistantController
{
    public function create_assistant(Request $request){
        $companies = Company::all();
        return view('assistant', compact('companies'));
    }


    public function store_assistant(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        //company_id must reference id in companies

        Assistant::create($validated);
        return redirect('/');
    }
    //
}
