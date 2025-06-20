<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeDeces extends Model
{
    use HasFactory;

    protected $casts = [
        'date_dec' => 'datetime',
    ];

    protected $fillable = [
        'num_reg_dec',
        'nom_def',
        'date_dec',
        'h_dec',
        'lieu_dec',
        'lieu_nais_def',
        'sexe_def',
        'nom_der_conj',
        'pnom_der_conj',
        'nom_p_def',
        'nom_m_def',
        'dom_def',
    ];

protected $table = 'deces';
}