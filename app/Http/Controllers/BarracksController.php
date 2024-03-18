<?php

namespace App\Http\Controllers;

use App\Models\Barracks;
use Illuminate\Http\Request;

class BarracksController extends Controller
{
    public function create(){
        return view('registroCuartel');
    }

    public function store(Request $request){
        $barracks = new Barracks();
        $barracks->name = $request->name;
        $barracks->location=$request->location;
        $barracks->save();

        return $barracks;
    }
}
