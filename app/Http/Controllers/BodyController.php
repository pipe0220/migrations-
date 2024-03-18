<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function create(){
        return view('registroCuerpo');
    }
    public function store(Request $request){
        $body = new Body();
        $body->name = $request->name;
        $body->save();

        return $body;
    }
}
