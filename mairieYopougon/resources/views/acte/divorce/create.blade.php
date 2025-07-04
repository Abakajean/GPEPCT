@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-orange-200">
            <!-- Header -->
            <div class="bg-orange-500 px-6 py-4 border-b border-orange-600">
                <h1 class="text-2xl font-bold text-white">Ajouter un acte de divorce</h1>
            </div>
            
            <!-- Form Container -->
            <div class="p-6">
                <form method="POST" action="{{ route('acte.divorce.store') }}" class="space-y-6">
                    @csrf
                    
                    <!-- Numéro de registre -->
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="num_reg_div" class="block text-sm font-medium text-gray-700">Numéro de registre</label>
                            <input type="text" id="num_reg_div" name="num_reg_div" value="{{ old('num_reg_div') }}" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" 
                                   required maxlength="5" pattern="[0-9]{5}" title="5 chiffres requis">
                            @error('num_reg_div')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Informations ex-conjoint -->
                    <div class="border-t border-gray-200 pt-6">
                        <h2 class="text-lg font-medium text-orange-600 mb-4">Informations sur l'ex-conjoint</h2>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label for="nom_exconj" class="block text-sm font-medium text-gray-700">Nom complet</label>
                                <input type="text" id="nom_exconj" name="nom_exconj" value="{{ old('nom_exconj') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('nom_exconj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="date_nais_exconj" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                                <input type="date" id="date_nais_exconj" name="date_nais_exconj" value="{{ old('date_nais_exconj') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('date_nais_exconj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="lieu_nais_exconj" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                                <input type="text" id="lieu_nais_exconj" name="lieu_nais_exconj" value="{{ old('lieu_nais_exconj') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('lieu_nais_exconj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="dom_exconj" class="block text-sm font-medium text-gray-700">Domicile</label>
                                <input type="text" id="dom_exconj" name="dom_exconj" value="{{ old('dom_exconj') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('dom_exconj')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informations ex-conjointe -->
                    <div class="border-t border-gray-200 pt-6">
                        <h2 class="text-lg font-medium text-orange-600 mb-4">Informations sur l'ex-conjointe</h2>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label for="nom_exconjte" class="block text-sm font-medium text-gray-700">Nom complet</label>
                                <input type="text" id="nom_exconjte" name="nom_exconjte" value="{{ old('nom_exconjte') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('nom_exconjte')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="date_nais_exconjte" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                                <input type="date" id="date_nais_exconjte" name="date_nais_exconjte" value="{{ old('date_nais_exconjte') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('date_nais_exconjte')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="lieu_nais_exconjte" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                                <input type="text" id="lieu_nais_exconjte" name="lieu_nais_exconjte" value="{{ old('lieu_nais_exconjte') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('lieu_nais_exconjte')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="dom_exconjte" class="block text-sm font-medium text-gray-700">Domicile</label>
                                <input type="text" id="dom_exconjte" name="dom_exconjte" value="{{ old('dom_exconjte') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('dom_exconjte')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informations sur le jugement -->
                    <div class="border-t border-gray-200 pt-6">
                        <h2 class="text-lg font-medium text-orange-600 mb-4">Informations sur le jugement</h2>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label for="date_jug" class="block text-sm font-medium text-gray-700">Date du jugement</label>
                                <input type="date" id="date_jug" name="date_jug" value="{{ old('date_jug') }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                @error('date_jug')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Boutons de soumission -->
                    <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('acte.divorce.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                            Annuler
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Enregistrer l'acte
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection