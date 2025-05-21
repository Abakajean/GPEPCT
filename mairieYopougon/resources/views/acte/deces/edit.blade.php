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
                        <label for="numero_registre" class="block text-sm font-medium text-gray-700">Numéro de registre (5 chiffres)</label>
                        <input type="text" id="numero_registre" name="numero_registre" value="{{ old('numero_registre', $acte->numero_registre) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                            required>
                        @error('numero_registre')
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
                                <label for="nom_defunt" class="block text-sm font-medium text-gray-700">Nom du défunt</label>
                                <input type="text" id="nom_defunt" name="nom_defunt" value="{{ old('nom_defunt', $acte->nom_defunt) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('nom_defunt')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Date de décès -->
                            <div>
                                <label for="date_deces" class="block text-sm font-medium text-gray-700">Date du décès</label>
                                <input type="date" id="date_deces" name="date_deces" value="{{ old('date_deces', $acte->date_deces->format('Y-m-d')) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('date_deces')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Lieu de décès -->
                            <div>
                                <label for="lieu_deces" class="block text-sm font-medium text-gray-700">Lieu du décès</label>
                                <input type="text" id="lieu_deces" name="lieu_deces" value="{{ old('lieu_deces', $acte->lieu_deces) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('lieu_deces')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Cause de décès -->
                            <div class="md:col-span-2">
                                <label for="cause_deces" class="block text-sm font-medium text-gray-700">Cause du décès</label>
                                <textarea id="cause_deces" name="cause_deces" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">{{ old('cause_deces', $acte->cause_deces) }}</textarea>
                                @error('cause_deces')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section Déclarant -->
                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="text-lg font-medium text-gray-900 bg-green-50 px-3 py-2 rounded-md">
                            <i class="fas fa-user-edit mr-2 text-orange-500"></i>Informations sur le déclarant
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- Nom déclarant -->
                            <div>
                                <label for="declarant_nom" class="block text-sm font-medium text-gray-700">Nom</label>
                                <input type="text" id="declarant_nom" name="declarant_nom" value="{{ old('declarant_nom', $acte->declarant_nom) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('declarant_nom')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Prénom déclarant -->
                            <!-- <div>
                                <label for="declarant_prenoms" class="block text-sm font-medium text-gray-700">Prénoms</label>
                                <input type="text" id="declarant_prenoms" name="declarant_prenoms" value="{{ old('declarant_prenoms', $acte->declarant_prenoms) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('declarant_prenoms')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div> -->
                            
                            <!-- Profession déclarant -->
                            <div>
                                <label for="declarant_profession" class="block text-sm font-medium text-gray-700">Profession</label>
                                <input type="text" id="declarant_profession" name="declarant_profession" value="{{ old('declarant_profession', $acte->declarant_profession) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('declarant_profession')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Adresse déclarant -->
                            <div>
                                <label for="declarant_adresse" class="block text-sm font-medium text-gray-700">Domicile</label>
                                <input type="text" id="declarant_domicile" name="declarant_domicile" value="{{ old('declarant_domicile', $acte->declarant_domicile) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                    required>
                                @error('declarant_domicile')
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