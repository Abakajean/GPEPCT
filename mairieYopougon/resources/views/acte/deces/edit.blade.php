@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <!-- En-tête avec titre -->
            <div class="bg-orange-500 px-6 py-4 border-b border-orange-600">
                <h1 class="text-2xl font-bold text-white">Modifier un acte de décès</h1>
                <p class="mt-1 text-orange-100">Mettez à jour les informations de l'acte</p>
            </div>

            <!-- Formulaire -->
            <form method="POST" action="{{ route('acte.deces.update', $acte) }}" class="p-6">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <!-- Numéro de registre -->
                    <div>
                        <label for="num_reg_dec" class="block text-sm font-medium text-gray-700">Numéro de registre (5 chiffres)</label>
                        <input type="text" id="num_reg_dec" name="num_reg_dec" value="{{ old('num_reg_dec', $acte->num_reg_dec) }}"
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
                                <input type="text" id="nom_def" name="nom_def" value="{{ old('nom_def', $acte->nom_def) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="sexe_def" class="block text-sm font-medium text-green-800">Sexe de defuntt</label>
                                <select id="sexe_def" name="sexe_def"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                        required>
                                    <option value="masculin" {{ old('sexe_def', $acte->sexe_def) == 'masculin' ? 'selected' : '' }}>Masculin</option>
                                    <option value="féminin" {{ old('sexe_def', $acte->sexe_def) == 'féminin' ? 'selected' : '' }}>Féminin</option>
                                </select>
                                @error('sexe_def')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="nom_der_conj" class="block text-sm font-medium text-gray-700">Lieu de naissance </label>
                                <input type="text" id="nom_der_conj" name="nom_der_conj" value="{{ old('nom_der_conj', $acte->nom_der_conj) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_der_conj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Date de décès -->
                            <div>
                                <label for="date_dec" class="block text-sm font-medium text-gray-700">Date du décès</label>
                                <input type="date" id="date_dec" name="date_dec" value="{{ old('date_dec', $acte->date_dec->format('Y-m-d')) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('date_dec')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Lieu de décès -->
                            <div>
                                <label for="lieu_dec" class="block text-sm font-medium text-gray-700">Lieu du décès</label>
                                <input type="text" id="lieu_dec" name="lieu_dec" value="{{ old('lieu_dec', $acte->lieu_dec) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('lieu_dec')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="h_dec" class="block text-sm font-medium text-green-800">Heure du deces</label>
                                <input type="time" id="h_dec" name="h_dec" value="{{ old('h_dec', $acte->h_dec) }}"
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                                       required>
                                @error('h_dec')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="dom_def" class="block text-sm font-medium text-gray-700">Domicile</label>
                                <input type="text" id="dom_def" name="dom_def" value="{{ old('dom_def', $acte->dom_def) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('dom_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="nom_p_def" class="block text-sm font-medium text-gray-700">Nom du père du défunt</label>
                                <input type="text" id="nom_p_def" name="nom_p_def" value="{{ old('nom_p_def', $acte->nom_p_def) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_p_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="nom_m_def" class="block text-sm font-medium text-gray-700">Nom de la mère du défunt</label>
                                <input type="text" id="nom_m_def" name="nom_m_def" value="{{ old('nom_m_def', $acte->nom_m_def) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_m_def')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="nom_der_conj" class="block text-sm font-medium text-gray-700">Nom dernier conjoint</label>
                                <input type="text" id="nom_der_conj" name="nom_der_conj" value="{{ old('nom_der_conj', $acte->nom_der_conj) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_der_conj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="prenom_dernier_conjoint" class="block text-sm font-medium text-gray-700">Prénom dernier conjoint</label>
                                <input type="text" id="prenom_dernier_conjoint" name="prenom_dernier_conjoint" value="{{ old('prenom_dernier_conjoint', $acte->prenom_dernier_conjoint) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('prenom_dernier_conjoint')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                    </div>
                    
                    <!-- Boutons d'action -->
                    <div class="flex justify-between pt-6 border-t border-gray-200">
                        <a href="{{ route('acte.deces.index') }}" 
                           class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-150 ease-in-out">
                            <i class="fas fa-arrow-left mr-2"></i> Retour
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-orange-500 border border-transparent rounded-md font-semibold text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-150 ease-in-out">
                            <i class="fas fa-save mr-2"></i> Mettre à jour
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection