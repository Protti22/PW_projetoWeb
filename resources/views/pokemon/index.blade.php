@extends('layouts.app')

@section('conteudo')
    <div class="space-y-6 max-w-4xl mx-auto px-4">
        <!-- Exibindo a lista de Pokémons -->
        @foreach($pokemon as $pokemons)
            <div class="p-4 bg-white shadow rounded-lg text-center">
                <h3 class="text-xl font-semibold">{{ $pokemons->nome }}</h3>
                <p class="text-gray-600">{{ $pokemons->tipo }}</p>
                <p class="text-gray-600">{{ $pokemons->pontos_de_poder }} Pontos de Poder</p>
                
                <div class="mt-4">
                    <form action="{{ url('pokemon/'.$pokemons->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Deletar Pokémon</button>
                    </form>
                </div>
            </div>
        @endforeach

        <!-- Seção de detalhes com Nome, Tipo e Pontos de Poder de forma mais simples -->
        <div class="mt-8 p-4 bg-white shadow rounded-lg text-center">
            <h2 class="text-2xl font-semibold mb-4">Detalhes dos Pokémons</h2>
            <div class="max-w-md text-gray-900 mx-auto">
                @foreach($pokemon as $pokemons)
                    <div class="mb-4">
                        <p><strong>Nome:</strong> {{ $pokemons->nome }}</p>
                        <p><strong>Tipo:</strong> {{ $pokemons->tipo }}</p>
                        <p><strong>Pontos de Poder:</strong> {{ $pokemons->pontos_de_poder }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
