<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController
{
    public function createCuadratica()
    {
            return view('cuadratica');
    }

    public function storeCuadratica(Request $request)
    {
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        $discriminante = $b ** 2 - 4 * $a * $c;
        $raiz1 = null;
        $raiz2 = null;

        if ($discriminante >= 0) {
            $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);
        }

        return view('cuadratica', compact('a', 'b', 'c', 'discriminante', 'raiz1', 'raiz2'));
    }

    public function createfactorial()
    {
        return view('factorial');

    }
    public function storefactorial(Request $request)
    {
        $request->validate([
            'numero' => 'required|numeric',
        ]);

        $numero = $request->input('numero');
        $factorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $factorial= $factorial * $i;
        }
        return ($factorial);

    }

}


