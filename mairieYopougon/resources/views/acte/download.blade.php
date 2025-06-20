<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acte - Mairie de Yopougon</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 0;
        }
        body {
            font-family: 'Times New Roman', serif;
            line-height: 1.5;
        }
        .watermark {
            position: absolute;
            opacity: 0.1;
            z-index: 1;
            width: 100%;
            height: 100%;
            background-image: url('/logoabidjan.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 400px;
        }
        .acte-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            position: relative;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            border-bottom: 2px solid #000;
            padding-bottom: 20px;
        }
        .header-left {
            flex: 1;
            text-align: center;
        }
        .header-right {
            flex: 1;
            text-align: center;
        }
        .header-logo {
            height: 80px;
        }
        .acte-title {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        .acte-title h2 {
            display: inline-block;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 0 20px;
            position: relative;
        }
        .acte-title h2:after, .acte-title h2:before {
            content: "";
            position: absolute;
            height: 2px;
            width: 100px;
            background: #000;
            top: 50%;
        }
        .acte-title h2:before {
            left: -110px;
        }
        .acte-title h2:after {
            right: -110px;
        }
        .acte-content {
            margin-bottom: 40px;
            text-align: justify;
        }
        .signature {
            margin-top: 60px;
        }
        .signature-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
        .signature-block {
            text-align: center;
            width: 45%;
        }
        .signature-image {
            height: 100px;
            margin-top: 10px;
            margin-left: 105px;
        }
        .signature-seal {
            height: 100px;
            margin-top: 20px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 0.8rem;
            color: #666;
        }
        .field-label {
            font-weight: bold;
            min-width: 200px;
            display: inline-block;
        }
        .border-dotted {
            border-bottom: 1px dotted #000;
            display: inline-block;
            min-width: 200px;
        }
        @media print {
            .no-print {
                display: none;
            }
            body {
                padding: 0;
                background: none;
            }
            .acte-container {
                max-width: 800px;
                margin: 0 auto;
                padding: 40px;
                position: relative;
            }
            .watermark {
                display: block;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="acte-container bg-white shadow-lg">
        <div class="watermark"></div>
        
        <!-- Nouvel en-tête avec logo à gauche et texte à droite -->
        <div class="header">
            <div class="header-left">
                <img src="/logoabidjan.png" alt="Logo Mairie de Yopougon" class="header-logo">
            </div>
            <div class="header-right">
                <h1 class="text-xl font-bold">RÉPUBLIQUE DE CÔTE D'IVOIRE</h1>
                <p class="italic">Union - Discipline - Travail</p>
                <h2 class="text-lg font-semibold mt-2">MAIRIE DE YOPOUGON</h2>
                <p class="text-sm">CENTRE D'ÉTAT CIVIL</p>
            </div>
        </div>

        <!-- Titre de l'acte -->
        <div class="acte-title">
            <h2>
                @if($type == 'naissance')
                    EXTRAIT D'ACTE DE NAISSANCE
                @elseif($type == 'mariage')
                    EXTRAIT D'ACTE DE MARIAGE
                @elseif($type == 'deces')
                    EXTRAIT D'ACTE DE DÉCÈS
                @elseif($type == 'divorce')
                    EXTRAIT D'ACTE DE DIVORCE
                @endif
            </h2>
        </div>

        <!-- Contenu spécifique à chaque type d'acte -->
        <div class="acte-content">
            @if($type == 'naissance')
                <!-- Acte de naissance -->
                <p><span class="field-label">Numéro de registre :</span> {{ $acte->num_reg_nais }}</p>
                <p class="mt-4">Je soussigné(e), Officier de l'État Civil de la commune de Yopougon, certifie que :</p>
                <p class="mt-4">L'enfant <span class="font-bold uppercase">{{ $acte->nom_enf }} {{ $acte->pnom_enf }}</span>,</p>
                <p>du sexe {{ $acte->sexe_enf }}, né(e) le {{ $acte->date_nais->format('d/m/Y') }} à {{ $acte->h_nais_enf }},</p>
                <p>à {{ $acte->lieu_nais }},</p>
                <p class="mt-4">Fils/Fille de <span class="font-bold">{{ $acte->nom_pnom_pere }}</span></p>
                <p>et de <span class="font-bold">{{ $acte->nom_pnom_mere }}</span>.</p>
                
            @elseif($type == 'mariage')
                <!-- Acte de mariage -->
                <p><span class="field-label">Numéro de registre :</span> {{ $acte->num_reg_mar }}</p>
                <p class="mt-4">Je soussigné(e), Officier de l'État Civil de la commune de Yopougon, certifie que :</p>
                
                <p class="mt-4 font-bold">ÉPOUX :</p>
                <p><span class="field-label">Nom et prénoms :</span> {{ $acte->nom_ep }}</p>
                <p><span class="field-label">Né(e) le :</span> {{ $acte->date_nais_ep->format('d/m/Y') }} à {{ $acte->lieu_nais_ep }}</p>
                <p><span class="field-label">Domicile :</span> {{ $acte->dom_ep }}</p>
                
                <p class="mt-4 font-bold">ÉPOUSE :</p>
                <p><span class="field-label">Nom et prénoms :</span> {{ $acte->nom_eps }}</p>
                <p><span class="field-label">Né(e) le :</span> {{ $acte->date_nais_eps->format('d/m/Y') }} à {{ $acte->lieu_nais_eps }}</p>
                <p><span class="field-label">Domicile :</span> {{ $acte->dom_eps }}</p>
                
                <p class="mt-4 font-bold">MARIAGE :</p>
                <p><span class="field-label">Date :</span> {{ $acte->date_mar->format('d/m/Y') }}</p>
                <p><span class="field-label">Heure :</span> {{ $acte->h_mar ?? 'Non précisée' }}</p>
                <p><span class="field-label">Régime matrimonial :</span> {{ $acte->type_reg }}</p>
                
            @elseif($type == 'deces')
                <!-- Acte de décès -->
                <p><span class="field-label">Numéro de registre :</span> {{ $acte->num_reg_dec }}</p>
                <p class="mt-4">Je soussigné(e), Officier de l'État Civil de la commune de Yopougon, certifie que :</p>
                
                <p class="mt-4"><span class="font-bold uppercase">{{ $acte->nom_def }}</span>,</p>
                <p><span class="field-label">Sexe :</span> {{ $acte->sexe_def }}</p>
                
                <p><span class="field-label">Décédé(e) le :</span> {{ $acte->date_dec->format('d/m/Y') }} à {{ $acte->h_dec }}</p>
                <p><span class="field-label">Lieu du décès :</span> {{ $acte->lieu_dec }}</p>
                <p><span class="field-label">Domicile :</span> {{ $acte->dom_def }}</p>
                
                <p class="mt-4"><span class="field-label">Fils de :</span> {{ $acte->nom_p_def }}</p>
                <p><span class="field-label">Et de :</span> {{ $acte->nom_m_def }}</p>
                
                @if($acte->nom_der_conj)
                <p class="mt-4"><span class="field-label">Conjoint(e) :</span> {{ $acte->nom_der_conj }} {{ $acte->pnom_der_conj }}</p>
                @endif
                
                
            @elseif($type == 'divorce')
                <!-- Acte de divorce -->
                <p><span class="field-label">Numéro de registre :</span> {{ $acte->num_reg_div }}</p>
                <p class="mt-4">Je soussigné(e), Officier de l'État Civil de la commune de Yopougon, certifie que :</p>
                
                <p class="mt-4 font-bold">EX-CONJOINT :</p>
                <p><span class="field-label">Nom et prénoms :</span> {{ $acte->nom_exconj }}</p>
                <p><span class="field-label">Né(e) le :</span> {{ $acte->date_nais_exconj->format('d/m/Y') }} à {{ $acte->lieu_nais_exconj }}</p>
                <p><span class="field-label">Domicile :</span> {{ $acte->dom_exconj }}</p>
                
                <p class="mt-4 font-bold">EX-CONJOINTE :</p>
                <p><span class="field-label">Nom et prénoms :</span> {{ $acte->nom_exconjte }}</p>
                <p><span class="field-label">Né(e) le :</span> {{ $acte->date_nais_exconjte->format('d/m/Y') }} à {{ $acte->lieu_nais_exconjte }}</p>
                <p><span class="field-label">Domicile :</span> {{ $acte->dom_exconjte }}</p>
                
                <p class="mt-4 font-bold">JUGEMENT :</p>
                <p><span class="field-label">Date du jugement :</span> {{ $acte->date_jug->format('d/m/Y') }}</p>
            @endif
            
            <p class="mt-8">Certifié véritable extrait conforme aux indications portées au registre.</p>
            <p class="text-right mt-4">Yopougon, le {{ now()->format('d/m/Y') }}</p>
        </div>

        <!-- Signature avec images -->
        <div class="signature">
            <div class="signature-row">
                <!-- Signature du Maire avec image -->
                <div class="signature-block">
                    <p>Le Maire</p>
                    <div class="border-dotted mt-2" style="width: 200px;"></div>
                    <img src="/maire.png" alt="Signature du Maire" class="signature-image">
                </div>
                
                <!-- Signature de l'Officier avec image -->
                <div class="signature-block">
                    <p>L'Officier de l'État Civil</p>
                    <div class="border-dotted mt-2" style="width: 200px;"></div>
                    <img src="/officier.png" alt="Signature de l'Officier" class="signature-image">
                </div>
            </div>
            
        </div>
    </div>

    <!-- Bouton d'impression -->
    <div class="no-print fixed bottom-10 right-10">
        <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
            Imprimer l'acte
        </button>
    </div>
</body>
</html>