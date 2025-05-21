@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- En-tête orange -->
    <div class="bg-orange-500 py-4 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">
                        Modifier un acte de mariage
                    </h1>
                    <p class="mt-1 text-orange-100">
                        Mise à jour des informations du mariage
                    </p>
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
                            <label for="numero_registre" class="block text-sm font-medium text-gray-700">Numéro de registre (5 chiffres)</label>
                            <input type="text" id="numero_registre" name="numero_registre" value="{{ old('numero_registre') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('numero_registre') border-red-500 @enderror">
                            @error('numero_registre')
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
                            <label for="nom_epoux" class="block text-sm font-medium text-gray-700">Nom de l'époux</label>
                            <input type="text" id="nom_epoux" name="nom_epoux" value="{{ old('nom_epoux') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('nom_epoux') border-red-500 @enderror">
                            @error('nom_epoux')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="epoux_profession" class="block text-sm font-medium text-gray-700">Profession</label>
                            <input type="text" id="epoux_profession" name="epoux_profession" value="{{ old('epoux_profession') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('epoux_profession') border-red-500 @enderror">
                            @error('epoux_profession')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="domicile_epoux" class="block text-sm font-medium text-gray-700">Domicile</label>
                            <input type="text" id="domicile_epoux" name="domicile_epoux" value="{{ old('domicile_epoux') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('domicile_epoux') border-red-500 @enderror">
                            @error('domicile_epoux')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_naissance_epoux" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                            <input type="date" id="date_naissance_epoux" name="date_naissance_epoux" value="{{ old('date_naissance_epoux') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('date_naissance_epoux') border-red-500 @enderror">
                            @error('date_naissance_epoux')
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
                            <label for="nom_epouse" class="block text-sm font-medium text-gray-700">Nom de l'épouse</label>
                            <input type="text" id="nom_epouse" name="nom_epouse" value="{{ old('nom_epouse') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('nom_epouse') border-red-500 @enderror">
                            @error('nom_epouse')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="epouse_profession" class="block text-sm font-medium text-gray-700">Profession</label>
                            <input type="text" id="epouse_profession" name="epouse_profession" value="{{ old('epouse_profession') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('epouse_profession') border-red-500 @enderror">
                            @error('epouse_profession')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="domicile_epouse" class="block text-sm font-medium text-gray-700">Domicile</label>
                            <input type="text" id="domicile_epouse" name="domicile_epouse" value="{{ old('domicile_epouse') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('domicile_epouse') border-red-500 @enderror">
                            @error('domicile_epouse')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_naissance_epouse" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                            <input type="date" id="date_naissance_epouse" name="date_naissance_epouse" value="{{ old('date_naissance_epouse') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('date_naissance_epouse') border-red-500 @enderror">
                            @error('date_naissance_epouse')
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
                            <label for="date_mariage" class="block text-sm font-medium text-gray-700">Date du mariage</label>
                            <input type="date" id="date_mariage" name="date_mariage" value="{{ old('date_mariage') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('date_mariage') border-red-500 @enderror">
                            @error('date_mariage')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="heure_mariage" class="block text-sm font-medium text-gray-700">Heure du mariage</label>
                            <input type="time" id="heure_mariage" name="heure_mariage" value="{{ old('heure_mariage') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('heure_mariage') border-red-500 @enderror">
                            @error('heure_mariage')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="lieu_mariage" class="block text-sm font-medium text-gray-700">Lieu du mariage</label>
                            <input type="text" id="lieu_mariage" name="lieu_mariage" value="{{ old('lieu_mariage') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('lieu_mariage') border-red-500 @enderror">
                            @error('lieu_mariage')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="type_regime" class="block text-sm font-medium text-gray-700">Type de régime</label>
                            <select id="type_regime" name="type_regime" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('type_regime') border-red-500 @enderror">
                                <option value="communaute_de_bien" {{ old('type_regime') == 'communaute_de_bien' ? 'selected' : '' }}>Communauté de bien</option>
                                <option value="separation_de_biens" {{ old('type_regime') == 'separation_de_biens' ? 'selected' : '' }}>Séparation de biens</option>
                            </select>
                            @error('type_regime')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Témoins époux -->
                        <div class="sm:col-span-2 mt-6 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-medium text-green-600 flex items-center">
                                <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Témoin de l'époux
                            </h3>
                        </div>

                        <div>
                            <label for="temoin_epoux_nom" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" id="temoin_epoux_nom" name="temoin_epoux_nom" value="{{ old('temoin_epoux_nom') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('temoin_epoux_nom') border-red-500 @enderror">
                            @error('temoin_epoux_nom')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="temoin_epoux_profession" class="block text-sm font-medium text-gray-700">Profession</label>
                            <input type="text" id="temoin_epoux_profession" name="temoin_epoux_profession" value="{{ old('temoin_epoux_profession') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('temoin_epoux_profession') border-red-500 @enderror">
                            @error('temoin_epoux_profession')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="temoin_epoux_domicile" class="block text-sm font-medium text-gray-700">Domicile</label>
                            <input type="text" id="temoin_epoux_domicile" name="temoin_epoux_domicile" value="{{ old('temoin_epoux_domicile') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('temoin_epoux_domicile') border-red-500 @enderror">
                            @error('temoin_epoux_domicile')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Témoins épouse -->
                        <div class="sm:col-span-2 mt-6 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-medium text-green-600 flex items-center">
                                <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Témoin de l'épouse
                            </h3>
                        </div>

                        <div>
                            <label for="temoin_epouse_nom" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" id="temoin_epouse_nom" name="temoin_epouse_nom" value="{{ old('temoin_epouse_nom') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('temoin_epouse_nom') border-red-500 @enderror">
                            @error('temoin_epouse_nom')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="temoin_epouse_profession" class="block text-sm font-medium text-gray-700">Profession</label>
                            <input type="text" id="temoin_epouse_profession" name="temoin_epouse_profession" value="{{ old('temoin_epouse_profession') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('temoin_epouse_profession') border-red-500 @enderror">
                            @error('temoin_epouse_profession')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="temoin_epouse_domicile" class="block text-sm font-medium text-gray-700">Domicile</label>
                            <input type="text" id="temoin_epouse_domicile" name="temoin_epouse_domicile" value="{{ old('temoin_epouse_domicile') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm @error('temoin_epouse_domicile') border-red-500 @enderror">
                            @error('temoin_epouse_domicile')
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