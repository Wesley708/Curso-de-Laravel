<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nomes = ["Wesley", "Mariana", "Marlene", "Fulano"];
        $arr = [10, 20, 30, 40, 50];
        $nome = "Wesley";
        $idade = 25;

        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create(){
        return view('events.create');
    }
}
