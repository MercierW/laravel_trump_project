<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAccueil extends Controller
{
    public function accueil(){
        return view('accueil', [
            'title' => 'Projet Trump Donald',
            'date' => new \DateTime(),
        ]);
    }
}