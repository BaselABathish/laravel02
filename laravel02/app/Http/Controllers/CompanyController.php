<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;


class CompanyController
{

    public function create_company(Request $request){
        return view("company");
    }


    public function store_company(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);

        Company::create($validated);
        return redirect('/');
    }
    //
}
