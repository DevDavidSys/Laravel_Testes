    @extends('app')

    @section('titulo')
        SOBRE MIM
    @endsection

    @section('conteudo')
            <h1>Meu nome é {{ $eu['nome'] }}</h1>
            <h2>Tenho {{ $eu['idade'] }} anos</h2>
    @endsection
