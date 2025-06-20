<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeDivorce extends Model
{
    use HasFactory;

    protected $casts = [
        'date_jug' => 'datetime',
        'date_nais_exconj' => 'datetime',
        'date_nais_exconjte' => 'datetime',
    ];


    protected $fillable = [
        'num_reg_div',
        'nom_exconj',
        'date_nais_exconj',
        'lieu_nais_exconj',
        'dom_exconj',
        'nom_exconjte',
        'date_nais_exconjte',
        'lieu_nais_exconjte',
        'dom_exconjte',
        'date_jug',
    ];

    protected $table = 'divorce';

}