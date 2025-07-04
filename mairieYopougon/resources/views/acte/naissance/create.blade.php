@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- En-tête avec couleur verte -->
                <div class="bg-green-700 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-white">Ajouter un acte de naissance</h2>
                        <a href="{{ route('acte.naissance.index') }}" class="text-orange-300 hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Contenu du formulaire -->
                <div class="p-6">
                    <form method="POST" action="{{ route('acte.naissance.store') }}" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <!-- Numéro registre -->
                            <div>
                                <label for="num_reg_nais" class="block text-sm font-medium text-green-800">Numéro de registre (5 chiffres)</label>
                                <input type="text" id="num_reg_nais" name="num_reg_nais" value="{{ old('num_reg_nais') }}" 
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('num_reg_nais')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Nom enfant -->
                            <div>
                                <label for="nom_enf" class="block text-sm font-medium text-green-800">Nom de l'enfant</label>
                                <input type="text" id="nom_enf" name="nom_enf" value="{{ old('nom_enf') }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('nom_enf')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Prénom enfant -->
                            <div>
                                <label for="pnom_enf" class="block text-sm font-medium text-green-800">Prénom de l'enfant</label>
                                <input type="text" id="pnom_enf" name="pnom_enf" value="{{ old('pnom_enf') }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('pnom_enf')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sexe enfant -->
                            <div>
                                <label for="sexe_enf" class="block text-sm font-medium text-green-800">Sexe de l'enfant</label>
                                <select id="sexe_enf" name="sexe_enf"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                        required>
                                    <option value="masculin" {{ old('sexe_enf') == 'masculin' ? 'selected' : '' }}>Masculin</option>
                                    <option value="féminin" {{ old('sexe_enf') == 'féminin' ? 'selected' : '' }}>Féminin</option>
                                </select>
                                @error('sexe_enf')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Date naissance -->
                            <div>
                                <label for="date_nais" class="block text-sm font-medium text-green-800">Date de naissance</label>
                                <input type="date" id="date_nais" name="date_nais" value="{{ old('date_nais') }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('date_nais')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Lieu naissance -->
                            <div>
                                <label for="lieu_nais" class="block text-sm font-medium text-green-800">Lieu de naissance</label>
                                <input type="text" id="lieu_nais" name="lieu_nais" value="{{ old('lieu_nais') }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('lieu_nais')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Heure de naissance -->
                            <div>
                                <label for="h_nais_enf" class="block text-sm font-medium text-green-800">Heure de naissance</label>
                                <input type="time" id="h_nais_enf" name="h_nais_enf" value="{{ old('h_nais_enf') }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('h_nais_enf')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Nom et prénom père -->
                            <div>
                                <label for="nom_pnom_pere" class="block text-sm font-medium text-green-800">Nom et prénom du père</label>
                                <input type="text" id="nom_pnom_pere" name="nom_pnom_pere" value="{{ old('nom_pnom_pere') }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('nom_pnom_pere')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Nom et prénom mère -->
                            <div>
                                <label for="nom_pnom_mere" class="block text-sm font-medium text-green-800">Nom et prénom de la mère</label>
                                <input type="text" id="nom_pnom_mere" name="nom_pnom_mere" value="{{ old('nom_pnom_mere') }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('nom_pnom_mere')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-end pt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-orange-600 border border-transparent rounded-md font-semibold text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Enregistrer l'acte
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection