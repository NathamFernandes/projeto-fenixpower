<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index(Request $request)
    {
        $profissionais = [
            'Dagmo Medeiros',
            'Kelly Macedo',
            'Claydson Negão',
            'Rafael Brabo',
            'Menina que esqueci o nome',
            'Moço novo'
        ];

        return view('equipe.index', [
            'profissionais' => $profissionais
        ]);
    }
}
