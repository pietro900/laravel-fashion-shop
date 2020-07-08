<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;

class ClotheController extends Controller
{
    public function index() {
        $all_clothe = Clothe::all();
        // dd($all_clothe);
        // echo'test'

        // compact va alla ricerca di una variabile col neme scritto tra parentesi
        // return ('view', compact('all_clothe'));
        //opure si puo scrivere...
        return view ('clother', ['lista_vestiti' =>$all_clothe]);
    }
}
