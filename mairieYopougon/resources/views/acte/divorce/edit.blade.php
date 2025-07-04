@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-orange-200">
            <!-- Header with orange background -->
            <div class="bg-orange-500 px-6 py-4 border-b border-orange-600">
                <h2 class="text-2xl font-bold text-white">
                    <i class="fas fa-edit mr-2"></i>{{ __('Modifier un acte de divorce') }}
                </h2>
            </div>

            <div class="p-6">
                <form method="POST" action="{{ route('acte.divorce.update', $acte) }}" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <!-- Numéro registre -->
                        <div>
                            <label for="num_reg_div" class="block text-sm font-medium text-gray-700">
                                {{ __('Numéro de registre (5 chiffres)') }}
                                <span class="text-orange-500">*</span>
                            </label>
                            <input id="num_reg_div" name="num_reg_div" type="text" 
                                   value="{{ old('num_reg_div', $acte->num_reg_div) }}" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50"
                                   required maxlength="5" pattern="[0-9]{5}" title="5 chiffres requis">
                            @error('num_reg_div')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Section époux -->
                        <div class="sm:col-span-2 pt-4 mt-4 border-t border-orange-200">
                            <h3 class="text-lg font-medium text-orange-700">
                                <i class="fas fa-user mr-2"></i>{{ __('Informations sur l\'époux') }}
                            </h3>
                        </div>

                        <div>
                            <label for="nom_exconj" class="block text-sm font-medium text-gray-700">
                                {{ __('Nom complet') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="nom_exconj" name="nom_exconj" type="text" 
                                   value="{{ old('nom_exconj', $acte->nom_exconj) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('nom_exconj')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_nais_exconj" class="block text-sm font-medium text-gray-700">
                                {{ __('Date de naissance') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="date_nais_exconj" name="date_nais_exconj" type="date" 
                                   value="{{ old('date_nais_exconj', $acte->date_nais_exconj) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('date_nais_exconj')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="lieu_nais_exconj" class="block text-sm font-medium text-gray-700">
                                {{ __('Lieu de naissance') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="lieu_nais_exconj" name="lieu_nais_exconj" type="text" 
                                   value="{{ old('lieu_nais_exconj', $acte->lieu_nais_exconj) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('lieu_nais_exconj')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="dom_exconj" class="block text-sm font-medium text-gray-700">
                                {{ __('Domicile') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="dom_exconj" name="dom_exconj" type="text" 
                                   value="{{ old('dom_exconj', $acte->dom_exconj) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('dom_exconj')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Section épouse -->
                        <div class="sm:col-span-2 pt-4 mt-4 border-t border-orange-200">
                            <h3 class="text-lg font-medium text-orange-700">
                                <i class="fas fa-user mr-2"></i>{{ __('Informations sur l\'épouse') }}
                            </h3>
                        </div>

                        <div>
                            <label for="nom_exconjte" class="block text-sm font-medium text-gray-700">
                                {{ __('Nom complet') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="nom_exconjte" name="nom_exconjte" type="text" 
                                   value="{{ old('nom_exconjte', $acte->nom_exconjte) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('nom_exconjte')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_nais_exconjte" class="block text-sm font-medium text-gray-700">
                                {{ __('Date de naissance') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="date_nais_exconjte" name="date_nais_exconjte" type="date" 
                                   value="{{ old('date_nais_exconjte', $acte->date_nais_exconjte) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('date_nais_exconjte')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="lieu_nais_exconjte" class="block text-sm font-medium text-gray-700">
                                {{ __('Lieu de naissance') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="lieu_nais_exconjte" name="lieu_nais_exconjte" type="text" 
                                   value="{{ old('lieu_nais_exconjte', $acte->lieu_nais_exconjte) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('lieu_nais_exconjte')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="dom_exconjte" class="block text-sm font-medium text-gray-700">
                                {{ __('Domicile') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="dom_exconjte" name="dom_exconjte" type="text" 
                                   value="{{ old('dom_exconjte', $acte->dom_exconjte) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('dom_exconjte')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Section divorce -->
                        <div class="sm:col-span-2 pt-4 mt-4 border-t border-orange-200">
                            <h3 class="text-lg font-medium text-orange-700">
                                <i class="fas fa-gavel mr-2"></i>{{ __('Informations sur le divorce') }}
                            </h3>
                        </div>

                        <div>
                            <label for="date_jug" class="block text-sm font-medium text-gray-700">
                                {{ __('Date du jugement') }} <span class="text-orange-500">*</span>
                            </label>
                            <input id="date_jug" name="date_jug" type="date" 
                                   value="{{ old('date_jug', $acte->date_jug) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200"
                                   required>
                            @error('date_jug')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-8 space-x-4">
                        <a href="{{ route('acte.divorce.index') }}" 
                           class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-gray-700 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-colors">
                            <i class="fas fa-times mr-2"></i>{{ __('Annuler') }}
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors">
                            <i class="fas fa-save mr-2"></i>{{ __('Mettre à jour') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection