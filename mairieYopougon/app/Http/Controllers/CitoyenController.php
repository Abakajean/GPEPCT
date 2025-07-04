<?php

namespace App\Http\Controllers;

use App\Models\Citoyen;
use App\Models\ActeNaissance;
use App\Models\ActeMariage;
use App\Models\ActeDeces;
use App\Models\ActeDivorce;
use App\Models\Paiement;
use Illuminate\Http\Request;

class CitoyenController extends Controller
{
    public function create()
    {
        return view('citoyen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_cit' => 'required|string|max:255',
            'pnom_ct' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|max:20',
            'Pays' => 'required|string|max:255',
            'ville_cit' => 'required|string|max:255',
            'type_a' => 'required|string|in:naissance,mariage,deces,divorce',
        ]);

        $citoyen = Citoyen::create($validated);

        return redirect()->route('citoyen.registre', ['citoyen' => $citoyen->id]);
    }

    public function showRegistreForm(Citoyen $citoyen)
    {
        return view('citoyen.registre', compact('citoyen'));
    }

    public function verifyRegistre(Request $request, Citoyen $citoyen)
{
    $request->validate([
        'numero_registre' => 'required|string|size:5',
    ]);

    $numero = $request->input('numero_registre');
    $type = $citoyen->type_a;
    $acte = null;

    switch($type) {
        case 'naissance':
            $acte = ActeNaissance::where('num_reg_nais', $numero)->first();
            break;
        case 'mariage':
            $acte = ActeMariage::where('num_reg_mar', $numero)->first();
            break;
        case 'deces':
            $acte = ActeDeces::where('num_reg_dec', $numero)->first();
            break;
        case 'divorce':
            $acte = ActeDivorce::where('num_reg_div', $numero)->first();
            break;
    }

    if (!$acte) {
        return back()->withErrors(['numero_registre' => 'Numéro de registre introuvable']);
    }

    session()->put('acte_a_payer', [
        'citoyen_id' => $citoyen->id,
        'type_a' => $type,
        'numero_registre' => $numero,
        'acte_data' => $acte->toArray(),
    ]);

    return view('citoyen.verification', compact('acte', 'citoyen', 'type'));
}

}