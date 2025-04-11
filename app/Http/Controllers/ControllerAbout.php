<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAbout extends Controller
{
    public function about() {
        return view('about', [
            'title' => 'Á propos',
            'date' => new \DateTime(),
        ]);
    }
}
