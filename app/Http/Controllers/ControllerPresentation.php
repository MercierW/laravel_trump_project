<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPresentation extends Controller
{
        public function presentation(){
            return view('presentation', [
                'title' => 'Paul l\'alien',
                'date' => new \DateTime(),
            ]);
        }
    }
