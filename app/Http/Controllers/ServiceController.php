<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function create(){
        return view('registroServicio');
    }

    public function store(Request $request){
        $service = new Service();
        $service->activity = $request->activity;
        $service->save();

        return $service;
    }
}
