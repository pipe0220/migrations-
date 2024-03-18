<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soldier;

class SoldierController extends Controller
{
    public function create(){
        return view('registroSoldado');
    }

    public function store(Request $request){
        $soldier = new Soldier();
        $soldier->name = $request->name;
        $soldier->lastname=$request->lastname;
        $soldier->grade=$request->grade;
        $soldier->save();

        return $soldier;
    }
}
