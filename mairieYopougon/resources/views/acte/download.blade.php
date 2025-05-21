<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acte - Mairie de Yopougon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            width: 100px;
            height: auto;
        }
        .acte-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #000;
        }
        .acte-title {
            text-align: center;
            text-decoration: underline;
            margin-bottom: 30px;
        }
        .acte-content {
            margin-bottom: 30px;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 0.8em;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="acte-container">
        <div class="header">
            <h1>RÉPUBLIQUE DE CÔTE D'IVOIRE</h1>
            <h2>Mairie de Yopougon</h2>
        </div>

        <div class="acte-title">
            <h2>
                @if($type == 'naissance')
                    ACTE DE NAISSANCE
                @elseif($type == 'mariage')
                    ACTE DE MARIAGE
                @elseif($type == 'deces')
                    ACTE DE DÉCÈS
                @elseif($type == 'divorce')
                    ACTE DE DIVORCE
                @endif
            </h2>
        </div>

        <div class="acte-content">
            @if($type == 'naissance')
                <p>Numéro de registre: {{ $acte->numero_registre }}</p>
                <p>Je soussigné, Officier de l'État Civil de la commune de Yopougon, certifie que :</p>
                <p>L'enfant {{ $acte->nom_enfant }} {{ $acte->prenom_enfant }},</p>
                <p>Né(e) le {{ $acte->date_naissance->format('d/m/Y') }} à {{ $acte->lieu_naissance }},</p>
                <p>Fils/Fille de {{ $acte->nom_et_prenom_pere }}, {{ $acte->pere_profession }}, demeurant à {{ $acte->pere_adresse }},</p>
                <p>Et de {{ $acte->nom_et_prenom_mere }}, {{ $acte->mere_profession }}, demeurant à {{ $acte->mere_adresse }},</p>
                <!-- <p>A été déclaré(e) le {{ $acte->date_declaration->format('d/m/Y') }}.</p> -->
            @elseif($type == 'mariage')
               
            @elseif($type == 'deces')
                
            @elseif($type == 'divorce')
                
            @endif
        </div>

        <div class="signature">
            <p>Fait à Yopougon, le {{ now()->format('d/m/Y') }}</p>
            <p>L'Officier de l'État Civil</p>
        </div>

        
    </div>

    <div class="no-print" style="text-align: center; margin-top: 20px;">
        <button onclick="window.print()" style="padding: 10px 20px; background: #3b82f6; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Imprimer
        </button>
    </div>
</body>
</html>