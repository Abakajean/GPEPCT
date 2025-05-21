<x-guest-layout>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-6">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Vérification du paiement</h2>
                <p class="mt-2 text-sm text-gray-600">Montant payé: 500 FCFA</p>
            </div>

            <form method="POST" action="{{ route('acte.verifier', $paiement) }}">
                @csrf

                <div class="space-y-6">
                    <!-- Référence de paiement -->
                    <div>
                        <x-input-label for="reference_paiement" :value="__('Référence de paiement')" />
                        <x-text-input id="reference_paiement" class="block mt-1 w-full" type="text" name="reference_paiement" value="{{ $paiement->reference_paiement }}" required />
                        <x-input-error :messages="$errors->get('reference_paiement')" class="mt-2" />
                        <p class="mt-1 text-sm text-gray-500">Veuillez confirmer votre référence de paiement</p>
                    </div>

                    <!-- Numéro de registre -->
                    <div>
                        <x-input-label for="numero_registre" :value="__('Numéro de registre (5 chiffres)')" />
                        <x-text-input id="numero_registre" class="block mt-1 w-full" type="text" name="numero_registre" required />
                        <x-input-error :messages="$errors->get('numero_registre')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <x-primary-button>
                            {{ __('Vérifier et imprimer') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>