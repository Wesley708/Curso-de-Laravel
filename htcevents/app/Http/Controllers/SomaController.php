<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomaController extends Controller
{
    public function soma(){
        $a = 10;
        $b = 20;
        $c = $a + $b;

        return view('soma', [
            'a' => $a,
            'b' => $b,
            'c' => $c
        ]);
    }
}
