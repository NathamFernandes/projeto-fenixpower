<x-layout title='Equipe'>
    <ul>
        @foreach ($profissionais as $profissional)
        <li>{{ $profissional; }}</li>
        @endforeach
    </ul>

    @{{ nome }} <!-- para js -->

</x-layout>