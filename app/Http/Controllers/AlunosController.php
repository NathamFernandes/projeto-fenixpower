<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunosFormRequest;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(Request $request) {
        $alunos = Aluno::all();

        return view('alunos.index')
            ->with('alunos', $alunos);
    }

    public function create() {

        return view('alunos.create');
    }

    public function store(Request $request) {
        // create
        Aluno::create($request->all());

        return redirect('/alunos');
    }

    public function destroy(Request $request)
    {
        // destroy
        Aluno::destroy($request->id);

        return redirect('/alunos');
    }
}
