<x-guest-layout>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">
                    @if($type == 'naissance')
                        Acte de Naissance
                    @elseif($type == 'mariage')
                        Acte de Mariage
                    @elseif($type == 'deces')
                        Acte de Décès
                    @elseif($type == 'divorce')
                        Acte de Divorce
                    @endif
                </h2>
                <p class="mt-2 text-sm text-gray-600">Votre paiement a été effectué avec succès</p>
            </div>

            <div class="mb-6 p-4 border border-gray-200 rounded-lg">
                
                @if($type == 'naissance')
                    <p><strong>Nom de l'enfant:</strong> {{ $acte->nom_enfant }} {{ $acte->prenom_enfant }}</p>
                    <p><strong>Date de naissance:</strong> {{ $acte->date_naissance->format('d/m/Y') }}</p>
                    <p><strong>Lieu de naissance:</strong> {{ $acte->lieu_naissance }}</p>
                    <p><strong>Nom du père:</strong> {{ $acte->nom_et_prenom_pere }}</p>
                    <p><strong>Nom de la mère:</strong> {{ $acte->nom_et_prenom_mere }}</p>
                @elseif($type == 'mariage')
                    
                @elseif($type == 'deces')
                   
                @elseif($type == 'divorce')
                    
                @endif

                <p class="mt-4"><strong>Numéro de registre:</strong> {{ $acte->numero_registre }}</p>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800">
                    Retour à l'accueil
                </a>
                
                <a href="{{ route('acte.imprimer', ['type' => $type, 'numero' => $acte->numero_registre]) }}" 
                   class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Télécharger l'acte
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>