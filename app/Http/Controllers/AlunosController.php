<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(Request $request) {
        $alunos = Aluno::all();

        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');

        return view('alunos.index')
            ->with('alunos', $alunos)
            ->with('mensagem', $mensagem);
    }

    public function create() {

        return view('alunos.create');
    }

    public function store(Request $request) {
        $nomeCompleto = $request->input('nome_completo');
        $matricula = $request->input('matricula');

        $aluno = new Aluno();

        $aluno->nome_completo = $nomeCompleto;
        $aluno->matricula = $matricula;

        $aluno->save();

        $request->session()->put('mensagem', "Aluno cadastrado com sucesso!");    

        return redirect('/alunos');
    }

    public function destroy(Request $request)
    {
        Aluno::destroy($request->id);

        $request->session()->put('mensagem', "Aluno excluído com sucesso!");    

        return redirect('/alunos');
    }
}
