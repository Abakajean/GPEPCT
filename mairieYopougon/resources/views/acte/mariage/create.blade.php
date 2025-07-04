@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- En-tête orange -->
    <div class="bg-orange-500 py-4 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">
                        Ajout d'un acte de mariage
                    </h1>
                </div>
                <div class="flex items-center space-x-2">
                    <a href="{{ route('acte.mariage.index') }}" class="flex items-center bg-white text-orange-600 hover:bg-orange-50 font-medium py-2 px-4 rounded-lg transition duration-200">
                        <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Retour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <!-- Messages d'erreur -->
                @if ($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="font-medium text-red-700">Veuillez corriger les erreurs dans le formulaire.</span>
                    </div>
                </div>
                @endif

                <form method="POST" action="{{ route('acte.mariage.store') }}">
                    @csrf

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <!-- Numéro registre -->
                        <div class="sm:col-span-2">
                            <label for="num_reg_mar" class="block text-sm font-medium text-gray-700">Numéro de registre (5 chiffres)</label>
                            <input type="text" id="num_reg_mar" name="num_reg_mar" value="{{ old('num_reg_mar') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('num_reg_mar') border-red-500 @enderror">
                            @error('num_reg_mar')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Informations époux -->
                        <div class="sm:col-span-2 mt-6 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-medium text-green-600 flex items-center">
                                <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Informations sur l'époux
                            </h3>
                        </div>

                        <div>
                            <label for="nom_ep" class="block text-sm font-medium text-gray-700">Nom de l'époux</label>
                            <input type="text" id="nom_ep" name="nom_ep" value="{{ old('nom_ep') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('nom_ep') border-red-500 @enderror">
                            @error('nom_ep')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="Nom_pere_ep" class="block text-sm font-medium text-gray-700">Nom et Prénom du père</label>
                            <input type="text" id="Nom_pere_ep" name="Nom_pere_ep" value="{{ old('Nom_pere_ep') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('Nom_pere_ep') border-red-500 @enderror">
                            @error('Nom_pere_ep')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nom_m_ep" class="block text-sm font-medium text-gray-700">Nom et Prénom du mère</label>
                            <input type="text" id="nom_m_ep" name="nom_m_ep" value="{{ old('nom_m_ep') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('nom_m_ep') border-red-500 @enderror">
                            @error('nom_m_ep')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_nais_ep" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                            <input type="date" id="date_nais_ep" name="date_nais_ep" value="{{ old('date_nais_ep') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('date_nais_ep') border-red-500 @enderror">
                            @error('date_nais_ep')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="lieu_nais_ep" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                            <input type="text" id="lieu_nais_ep" name="lieu_nais_ep" value="{{ old('lieu_nais_ep') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('lieu_nais_ep') border-red-500 @enderror">
                            @error('lieu_nais_ep')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="dom_ep" class="block text-sm font-medium text-gray-700">Domicile</label>
                            <input type="text" id="dom_ep" name="dom_ep" value="{{ old('dom_ep') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('dom_ep') border-red-500 @enderror">
                            @error('dom_ep')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <!-- Informations épouse -->
                        <div class="sm:col-span-2 mt-6 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-medium text-green-600 flex items-center">
                                <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Informations sur l'épouse
                            </h3>
                        </div>

                        <div>
                            <label for="nom_eps" class="block text-sm font-medium text-gray-700">Nom de l'épouse</label>
                            <input type="text" id="nom_eps" name="nom_eps" value="{{ old('nom_eps') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('nom_eps') border-red-500 @enderror">
                            @error('nom_eps')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nom_p_eps" class="block text-sm font-medium text-gray-700">Nom et Prénom du père</label>
                            <input type="text" id="nom_p_eps" name="nom_p_eps" value="{{ old('nom_p_eps') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('nom_p_eps') border-red-500 @enderror">
                            @error('nom_p_eps')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nom_m_eps" class="block text-sm font-medium text-gray-700">Nom et Prénom du mère</label>
                            <input type="text" id="nom_m_eps" name="nom_m_eps" value="{{ old('nom_m_eps') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('nom_m_eps') border-red-500 @enderror">
                            @error('nom_m_eps')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_nais_eps" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                            <input type="date" id="date_nais_eps" name="date_nais_eps" value="{{ old('date_nais_eps') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('date_nais_eps') border-red-500 @enderror">
                            @error('date_nais_eps')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="lieu_nais_eps" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                            <input type="text" id="lieu_nais_eps" name="lieu_nais_eps" value="{{ old('lieu_nais_eps') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('lieu_nais_eps') border-red-500 @enderror">
                            @error('lieu_nais_eps')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="dom_eps" class="block text-sm font-medium text-gray-700">Domicile</label>
                            <input type="text" id="dom_eps" name="dom_eps" value="{{ old('dom_eps') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('dom_eps') border-red-500 @enderror">
                            @error('dom_eps')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Informations mariage -->
                        <div class="sm:col-span-2 mt-6 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-medium text-green-600 flex items-center">
                                <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Informations sur le mariage
                            </h3>
                        </div>

                        <div>
                            <label for="date_mar" class="block text-sm font-medium text-gray-700">Date du mariage</label>
                            <input type="date" id="date_mar" name="date_mar" value="{{ old('date_mar') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('date_mar') border-red-500 @enderror">
                            @error('date_mar')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="h_mar" class="block text-sm font-medium text-gray-700">Heure du mariage</label>
                            <input type="time" id="h_mar" name="h_mar" value="{{ old('h_mar') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('h_mar') border-red-500 @enderror">
                            @error('h_mar')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="type_reg" class="block text-sm font-medium text-gray-700">Type de régime</label>
                            <select id="type_reg" name="type_reg" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('type_reg') border-red-500 @enderror">
                                <option value="communaute_de_bien" {{ old('type_reg') == 'communaute_de_bien' ? 'selected' : '' }}>Communauté de bien</option>
                                <option value="separation_de_biens" {{ old('type_reg') == 'separation_de_biens' ? 'selected' : '' }}>Séparation de biens</option>
                            </select>
                            @error('type_reg')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Bouton de soumission -->
                    <div class="mt-8 flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-150 ease-in-out">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Enregistrer l'acte
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection