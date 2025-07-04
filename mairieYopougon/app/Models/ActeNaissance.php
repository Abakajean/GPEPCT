<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeNaissance extends Model
{
    use HasFactory;

    protected $casts = [
        'date_nais' => 'datetime',
    ];

    protected $fillable = [
        'num_reg_nais',
        'nom_enf',
        'pnom_enf',
        'sexe_enf',
        'date_nais',
        'lieu_nais',
        'h_nais_enf',
        'nom_pnom_pere',
        'nom_pnom_mere',
    ];

    protected $table = 'naissance';
}