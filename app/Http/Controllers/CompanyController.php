<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){
        return view('registroCompany');
    }

    public function store(Request $request){
        $company = new Company();
        $company->name = $request->name;
        $company->save();

        return $company;
    }
}
