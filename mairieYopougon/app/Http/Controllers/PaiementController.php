<?php

namespace App\Http\Controllers;

use App\Models\Citoyen;
use App\Models\Paiement;
use App\Models\ActeNaissance;
use App\Models\ActeMariage;
use App\Models\ActeDeces;
use App\Models\ActeDivorce;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function create(Citoyen $citoyen)
    {
        // Vérifier qu'un acte est en attente de paiement
        if (!session()->has('acte_a_payer') || session('acte_a_payer.citoyen_id') != $citoyen->id) {
            return redirect()->route('citoyen.registre', ['citoyen' => $citoyen->id])
                ->withErrors(['message' => "Veuillez d'abord vérifier votre numéro de registre"]);
        }

        return view('paiement.create', compact('citoyen'));
    }

    public function store(Request $request, Citoyen $citoyen)
    {
        $request->validate([
            'Moyen_paie' => 'required|string|in:wave,mtn_money,orange_money,moov_money',
        ]);

        // Créer le paiement
        $paiement = Paiement::create([
            'citoyen_id' => $citoyen->id,
            'Moyen_paie' => $request->Moyen_paie,
            'mont' => 500,
        ]);

        // Récupérer l'acte depuis la session
        $acteData = session('acte_a_payer');

        // Rediriger vers la page de téléchargement
        return redirect()->route('acte.download', [
            'type' => $acteData['type_a'],
            'numero' => $acteData['numero_registre']
        ]);
    }
    public function download($type, $numero)
    {
        $acte = null;
        
        switch($type) {
            case 'naissance':
                $acte = ActeNaissance::where('num_reg_nais', $numero)->firstOrFail();
                break;
            case 'mariage':
                $acte = ActeMariage::where('num_reg_mar', $numero)->firstOrFail();
                break;
            case 'deces':
                $acte = ActeDeces::where('num_reg_dec', $numero)->firstOrFail();
                break;
            case 'divorce':
                $acte = ActeDivorce::where('num_reg_div', $numero)->firstOrFail();
                break;
            default:
                abort(404);
        }

        return view('acte.download', compact('acte', 'type'));
    }
}