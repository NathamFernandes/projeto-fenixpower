<x-layout title='Alunos'>
    <a href="/alunos/cadastrar">Cadastrar novo aluno</a>
    @if(isset($mensagem))
    <p style='color: red;'>
        {{ $mensagem }}
    </p>
    @endif
    @foreach ($alunos as $aluno)
    <li>ID: {{ $aluno->id }} </li>
    <li>Nome: {{ $aluno->nome_completo }} </li>
    <li>Matrícula: {{ $aluno->matricula }} </li>
    <form action="/alunos/deletar/{{ $aluno->id }}" method="post">
        @csrf
        <button style='background-color: lightcoral;'>Excluir</button>
    </form>
    <br>
    @endforeach
</x-layout>