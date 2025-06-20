<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeMariage extends Model
{
    use HasFactory;

    protected $casts = [
        'date_mar' => 'datetime',
        'date_nais_ep' => 'datetime',
        'date_nais_eps' => 'datetime',
    ];

    protected $fillable = [
        'num_reg_mar',
        'nom_ep',
        'Nom_pere_ep',
        'nom_m_ep',
        'date_nais_ep',
        'lieu_nais_ep',
        'dom_ep',
        'nom_eps',
        'nom_p_eps',
        'nom_m_eps',
        'date_nais_eps',
        'lieu_nais_eps',
        'dom_eps',
        'date_mar',
        'h_mar',
        'type_reg',
    ];

    protected $table = 'mariage';
}