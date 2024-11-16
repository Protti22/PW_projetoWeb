@extends('layouts.app')

@section('conteudo')
<div class="max-w-sm mx-auto">
<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <div class="w-full max-w-x">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nome">
                    Nome
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nome" type="text" name="nome" placeholder="Nome" required>

                <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo">
                    Tipo
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="tipo" type="text" name="tipo" placeholder="Tipo" required>

                <label class="block text-gray-700 text-sm font-bold mb-2" for="pontos_de_poder">
                    Pontos de Poder
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="pontos_de_poder" type="number" name="pontos_de_poder" placeholder="Pontos de Poder" required>

            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Criar Pokemon
                </button>
            </div>
        </div>
    </div>
</form>
</div>
@endsection