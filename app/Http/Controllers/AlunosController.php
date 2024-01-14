<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(Request $request) {
        $alunos = ['eu'];

        return view('alunos.index', [
            'alunos' => $alunos
        ]);
    }

    public function create() {
        return view('alunos.create');
    }
}
