<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ControllerLang extends Controller
{
    public function lang(){
        $language = [

            [
                'lang'    => 'PHP',
                'type'    => 'Interprété',
                'version' => '8.1'
            ],
            [
                'lang'    => 'JavaScript',
                'type'    => 'Interprété',
                'version' => 'ES2021'
            ],
            [
                'lang'    => 'Python',
                'type'    => 'Interprété',
                'version' => '3.10'
            ],
            [
                'lang'    => 'Java',
                'type'    => 'Compilé (bytecode)',
                'version' => '17'
            ],
            [
                'lang'    => 'C++',
                'type'    => 'Compilé',
                'version' => 'C++20'
            ]
        ];
        return view('langues', [
            'title' => 'Tableau langages programmation',
            'date' => new \DateTime(),
            'langs' => $language
        ]);
    }
}

