<x-layout title='Alunos'>
    <form action="/alunos" method="post">
        @csrf
        Nome Completo: <input type="text" name="nome_completo" id="nome_completo">
        Matrícula: <input type="text" name="matricula" id="matricula">
        <input type="submit" value="Enviar">
    </form>
</x-layout>