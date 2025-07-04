<?php

namespace App\Http\Controllers;

use App\Models\ActeDeces;
use App\Models\ActeDivorce;
use App\Models\ActeMariage;
use App\Models\ActeNaissance;
use Illuminate\Http\Request;

class ActeController extends Controller
{
    public function index()
    {
        return view('acte.index');
    }

    // Naissance
    public function naissanceIndex()
    {
        $actes = ActeNaissance::orderBy('created_at', 'desc')->paginate(10);
        return view('acte.naissance.index', compact('actes'));
    }

    public function naissanceCreate()
    {
        return view('acte.naissance.create');
    }

    public function naissanceStore(Request $request)
    {
        $validated = $request->validate([
            'num_reg_nais' => 'required|string|size:5|unique:naissance',
            'nom_enf' => 'required|string|max:255',
            'pnom_enf' => 'required|string|max:255',
            'sexe_enf' => 'required|in:masculin,féminin',
            'date_nais' => 'required|date',
            'lieu_nais' => 'required|string|max:255',
            'h_nais_enf' => 'required|date_format:H:i',
            'nom_pnom_pere' => 'required|string|max:255',
            'nom_pnom_mere' => 'required|string|max:255',
        ]);

        ActeNaissance::create($validated);

        return redirect()->route('acte.naissance.index')->with('success', 'Acte de naissance créé avec succès.');
    }

    public function naissanceEdit(ActeNaissance $acte)
    {
        return view('acte.naissance.edit', compact('acte'));
    }

    public function naissanceUpdate(Request $request, ActeNaissance $acte)
    {
        $validated = $request->validate([
            'num_reg_nais' => 'required|string|size:5|unique:naissance,num_reg_nais,' . $acte->id,
            'nom_enf' => 'required|string|max:255',
            'pnom_enf' => 'required|string|max:255',
            'sexe_enf' => 'required|in:masculin,féminin',
            'date_nais' => 'required|date',
            'lieu_nais' => 'required|string|max:255',
            'h_nais_enf' => 'required|date_format:H:i',
            'nom_pnom_pere' => 'required|string|max:255',
            'nom_pnom_mere' => 'required|string|max:255',
        ]);

        $acte->update($validated);

        return redirect()->route('acte.naissance.index')->with('success', 'Acte de naissance mis à jour avec succès.');
    }

    public function naissanceDestroy(ActeNaissance $acte)
    {
        $acte->delete();
        return redirect()->route('acte.naissance.index')->with('success', 'Acte de naissance supprimé avec succès.');
    }

    // Mariage
    public function mariageIndex()
    {
        $actes = ActeMariage::orderBy('created_at', 'desc')->paginate(10);
        return view('acte.mariage.index', compact('actes'));
    }

    public function mariageCreate()
    {
        return view('acte.mariage.create');
    }

    public function mariageStore(Request $request)
    {
        $validated = $request->validate([
            'num_reg_mar' => 'required|string|size:5|unique:mariage',
            'nom_ep' => 'required|string|max:255',
            'Nom_pere_ep' => 'required|string|max:255',
            'nom_m_ep' => 'required|string|max:255',
            'date_nais_ep' => 'required|date',
            'lieu_nais_ep' => 'required|string|max:255',
            'dom_ep' => 'required|string|max:255',

            'nom_eps' => 'required|string|max:255',
            'nom_p_eps' => 'required|string|max:255',
            'nom_m_eps' => 'required|string|max:255',
            'date_nais_eps' => 'required|date',
            'lieu_nais_eps' => 'required|string|max:255',
            'dom_eps' => 'required|string|max:255',

            'date_mar' => 'required|date',
            'h_mar' => 'nullable',
            'type_reg' => 'required|string|',
        ]);

        ActeMariage::create($validated);

        return redirect()->route('acte.mariage.index')->with('success', 'Acte de mariage créé avec succès.');
    }

    public function mariageEdit(ActeMariage $acte)
    {
        return view('acte.mariage.edit', compact('acte'));
    }

    public function mariageUpdate(Request $request, ActeMariage $acte)
    {
        $validated = $request->validate([
            'num_reg_mar' => 'required|string|size:5|unique:mariage,num_reg_mar,' . $acte->id,

            'nom_ep' => 'required|string|max:255',
            'Nom_pere_ep' => 'required|string|max:255',
            'nom_m_ep' => 'required|string|max:255',
            'date_nais_ep' => 'required|date',
            'lieu_nais_ep' => 'required|string|max:255',
            'dom_ep' => 'required|string|max:255',

            'nom_eps' => 'required|string|max:255',
            'nom_p_eps' => 'required|string|max:255',
            'nom_m_eps' => 'required|string|max:255',
            'date_nais_eps' => 'required|date',
            'lieu_nais_eps' => 'required|string|max:255',
            'dom_eps' => 'required|string|max:255',

            'date_mar' => 'required|date',
            'h_mar' => 'nullable',
            'type_reg' => 'required|string',
        ]);

        $acte->update($validated);

        return redirect()->route('acte.mariage.index')->with('success', 'Acte de mariage mis à jour avec succès.');
    }

    public function mariageDestroy(ActeMariage $acte)
    {
        $acte->delete();
        return redirect()->route('acte.mariage.index')->with('success', 'Acte de mariage supprimé avec succès.');
    }

    // Divorce
    public function divorceIndex()
    {
        $actes = ActeDivorce::orderBy('created_at', 'desc')->paginate(10);
        return view('acte.divorce.index', compact('actes'));
    }

    public function divorceCreate()
    {
        return view('acte.divorce.create');
    }

    public function divorceStore(Request $request)
    {
        $validated = $request->validate([
            'num_reg_div' => 'required|string|size:5|unique:divorce',
            'nom_exconj' => 'required|string|max:255',
            'date_nais_exconj' => 'required|date',
            'lieu_nais_exconj' => 'required|string|max:255',
            'dom_exconj' => 'required|string|max:255',
            'nom_exconjte' => 'required|string|max:255',
            'date_nais_exconjte' => 'required|date',
            'lieu_nais_exconjte' => 'required|string|max:255',
            'dom_exconjte' => 'required|string|max:255',
            'date_jug' => 'required|date',
        ]);

        ActeDivorce::create($validated);

        return redirect()->route('acte.divorce.index')->with('success', 'Acte de divorce créé avec succès.');
    }

    public function divorceEdit(ActeDivorce $acte)
    {
        return view('acte.divorce.edit', compact('acte'));
    }

    public function divorceUpdate(Request $request, ActeDivorce $acte)
    {
        $validated = $request->validate([
            'num_reg_div' => 'required|string|size:5|unique:divorce,num_reg_div,'.$acte->id,
            'nom_exconj' => 'required|string|max:255',
            'date_nais_exconj' => 'required|date',
            'lieu_nais_exconj' => 'required|string|max:255',
            'dom_exconj' => 'required|string|max:255',
            'nom_exconjte' => 'required|string|max:255',
            'date_nais_exconjte' => 'required|date',
            'lieu_nais_exconjte' => 'required|string|max:255',
            'dom_exconjte' => 'required|string|max:255',
            'date_jug' => 'required|date',
        ]);

        $acte->update($validated);

        return redirect()->route('acte.divorce.index')->with('success', 'Acte de divorce mis à jour avec succès.');
    }

    public function divorceDestroy(ActeDivorce $acte)
    {
        $acte->delete();
        return redirect()->route('acte.divorce.index')->with('success', 'Acte de divorce supprimé avec succès.');
    }

    // Deces
    public function decesIndex()
    {
        $actes = ActeDeces::orderBy('created_at', 'desc')->paginate(10);
        return view('acte.deces.index', compact('actes'));
    }

    public function decesCreate()
    {
        return view('acte.deces.create');
    }

    public function decesStore(Request $request)
    {
        $validated = $request->validate([
            'num_reg_dec' => 'required|string|size:5|unique:deces',
            'nom_def' => 'required|string|max:255',
            'date_dec' => 'required|date',
            'h_dec' => 'required|date_format:H:i',
            'lieu_dec' => 'required|string|max:255',
            'lieu_nais_def' => 'required|string|max:255',
            'sexe_def' => 'required|in:masculin,féminin',
            'nom_der_conj' => 'required|string|max:255',
            'pnom_der_conj' => 'required|string|max:255',
            'nom_p_def' => 'required|string|max:255',
            'nom_m_def' => 'required|string|max:255',
            'dom_def' => 'required|string|max:255',
        ]);

        ActeDeces::create($validated);

        return redirect()->route('acte.deces.index')->with('success', 'Acte de deces créé avec succès.');
    }

    public function decesEdit(ActeDeces $acte)
    {
        return view('acte.deces.edit', compact('acte'));
    }

    public function decesUpdate(Request $request, ActeDeces $acte)
    {
        $validated = $request->validate([
            'num_reg_dec' => 'required|string|size:5|unique:deces,num_reg_dec,' . $acte->id,
            'nom_def' => 'required|string|max:255',
            'date_dec' => 'required|date',
            'h_dec' => 'required|date_format:H:i',
            'lieu_dec' => 'required|string|max:255',
            'lieu_nais_def' => 'required|string|max:255',
            'sexe_def' => 'required|in:masculin,féminin',
            'nom_der_conj' => 'required|string|max:255',
            'pnom_der_conj' => 'required|string|max:255',
            'nom_p_def' => 'required|string|max:255',
            'nom_m_def' => 'required|string|max:255',
            'dom_def' => 'required|string|max:255',
        ]);

        $acte->update($validated);

        return redirect()->route('acte.deces.index')->with('success', 'Acte de deces mis à jour avec succès.');
    }

    public function decesDestroy(ActeDeces $acte)
    {
        $acte->delete();
        return redirect()->route('acte.deces.index')->with('success', 'Acte de deces supprimé avec succès.');
    }

    public function show($type, $numero)
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

        // Vérifier que le paiement a été effectué
        if (!session()->has('acte_verifie')) {
            return redirect()->route('citoyen.registre')
                ->withErrors(['message' => "Veuillez d'abord vérifier votre numéro de registre et effectuer le paiement"]);
        }

        return view('acte.show', compact('acte', 'type'));
    }
}