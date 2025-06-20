@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-orange-500 px-6 py-4 border-b border-orange-600">
                <h1 class="text-2xl font-bold text-white">Ajouter un acte de décès</h1>
            </div>
            
            <!-- Form -->
            <form method="POST" action="{{ route('acte.deces.store') }}" class="px-6 py-4">
                @csrf
                
                <div class="space-y-6">
                    <!-- Numéro de registre -->
                    <div>
                        <label for="num_reg_dec" class="block text-sm font-medium text-gray-700">Numéro de registre (5 chiffres)</label>
                        <input type="number" id="num_reg_dec" name="num_reg_dec" value="{{ old('num_reg_dec') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                            required>
                        @error('num_reg_dec')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Section Défunt -->
                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="text-lg font-medium text-gray-900 bg-green-50 px-3 py-2 rounded-md">
                            <i class="fas fa-user mr-2 text-orange-500"></i>Informations sur le défunt
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- Nom défunt -->
                            <div>
                                <label for="nom_def" class="block text-sm font-medium text-gray-700">Nom du défunt</label>
                                <input type="text" id="nom_def" name="nom_def" value="{{ old('nom_def') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Sexe défunt -->
                            <div>
                                <label for="sexe_def" class="block text-sm font-medium text-gray-700">Sexe</label>
                                <select id="sexe_def" name="sexe_def"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                    <option value="">Sélectionner</option>
                                    <option value="masculin" {{ old('sexe_def') == 'masculin' ? 'selected' : '' }}>Masculin</option>
                                    <option value="féminin" {{ old('sexe_def') == 'féminin' ? 'selected' : '' }}>Féminin</option>
                                </select>
                                @error('sexe_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Lieu de naissance -->
                            <div>
                                <label for="lieu_nais_def" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                                <input type="text" id="lieu_nais_def" name="lieu_nais_def" value="{{ old('lieu_nais_def') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('lieu_nais_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Date de décès -->
                            <div>
                                <label for="date_dec" class="block text-sm font-medium text-gray-700">Date du décès</label>
                                <input type="date" id="date_dec" name="date_dec" value="{{ old('date_dec') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('date_dec')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Heure de décès -->
                            <div>
                                <label for="h_dec" class="block text-sm font-medium text-gray-700">Heure du décès</label>
                                <input type="time" id="h_dec" name="h_dec" value="{{ old('h_dec') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('h_dec')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Lieu de décès -->
                            <div>
                                <label for="lieu_dec" class="block text-sm font-medium text-gray-700">Lieu du décès</label>
                                <input type="text" id="lieu_dec" name="lieu_dec" value="{{ old('lieu_dec') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('lieu_dec')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="dom_def" class="block text-sm font-medium text-gray-700">Domicile</label>
                                <input type="text" id="dom_def" name="dom_def" value="{{ old('dom_def') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('dom_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section Parents -->
                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="text-lg font-medium text-gray-900 bg-green-50 px-3 py-2 rounded-md">
                            <i class="fas fa-users mr-2 text-orange-500"></i>Informations sur les parents
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- Nom père -->
                            <div>
                                <label for="nom_p_def" class="block text-sm font-medium text-gray-700">Nom du père</label>
                                <input type="text" id="nom_p_def" name="nom_p_def" value="{{ old('nom_p_def') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_p_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Nom mère -->
                            <div>
                                <label for="nom_m_def" class="block text-sm font-medium text-gray-700">Nom de la mère</label>
                                <input type="text" id="nom_m_def" name="nom_m_def" value="{{ old('nom_m_def') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_m_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Dernier conjoint -->
                            <div>
                                <label for="nom_der_conj" class="block text-sm font-medium text-gray-700">Nom du dernier conjoint</label>
                                <input type="text" id="nom_der_conj" name="nom_der_conj" value="{{ old('nom_der_conj') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                @error('nom_der_conj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Prénom dernier conjoint -->
                            <div>
                                <label for="pnom_der_conj" class="block text-sm font-medium text-gray-700">Prénom du dernier conjoint</label>
                                <input type="text" id="pnom_der_conj" name="pnom_der_conj" value="{{ old('pnom_der_conj') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                @error('pnom_der_conj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bouton de soumission -->
                    <div class="flex justify-end pt-6 border-t border-gray-200">
                        <a href="{{ route('acte.deces.index') }}" 
                            class="inline-flex items-center px-2 py-2 bg-gray-300 border border-gray-400 rounded-md font-semibold text-gray-900 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-150 ease-in-out ml-10 mr-10">
                            <!-- SVG de flèche vers la gauche -->
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Retour
                        </a>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-orange-500 border border-transparent rounded-md font-semibold text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                            <!-- <i class="fas fa-save mr-2"></i> -->Enregistrer l'acte
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection