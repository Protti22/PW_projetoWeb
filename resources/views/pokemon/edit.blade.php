@extends('layouts.app')

@section('conteudo')
    @if($pokemon)  <!-- Verifica se o Pokémon existe -->
        <div class="space-y-8 max-w-4xl mx-auto px-4">
            <h1 class="text-3xl font-semibold text-gray-800">Editar Pokémon</h1>

            <!-- Exibindo o Pokémon -->
            <div class="p-6 bg-white shadow-lg rounded-lg space-y-4">
                <h3 class="text-2xl font-semibold text-blue-600">{{ $pokemon->nome }}</h3>
                <p class="text-lg text-gray-700">{{ $pokemon->tipo }}</p>
                <p class="text-lg text-gray-700">{{ $pokemon->pontos_de_poder }} Pontos de Poder</p>

                <!-- Formulário para Editar o Pokémon -->
                <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Campo para Nome -->
                    <div class="mb-4">
                        <label for="nome" class="block text-lg font-semibold text-gray-700">Nome</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $pokemon->nome) }}" class="mt-2 w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Campo para Tipo -->
                    <div class="mb-4">
                        <label for="tipo" class="block text-lg font-semibold text-gray-700">Tipo</label>
                        <input type="text" id="tipo" name="tipo" value="{{ old('tipo', $pokemon->tipo) }}" class="mt-2 w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Campo para Pontos de Poder -->
                    <div class="mb-4">
                        <label for="pontos_de_poder" class="block text-lg font-semibold text-gray-700">Pontos de Poder</label>
                        <input type="number" id="pontos_de_poder" name="pontos_de_poder" value="{{ old('pontos_de_poder', $pokemon->pontos_de_poder) }}" class="mt-2 w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Botão para Enviar o Formulário -->
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Salvar Alterações</button>
                </form>
            </div>
        </div>
    @else
        <!-- Caso o Pokémon não seja encontrado, exibe uma mensagem -->
        <p class="text-center text-red-500">Pokémon não encontrado!</p>
    @endif
@endsection
