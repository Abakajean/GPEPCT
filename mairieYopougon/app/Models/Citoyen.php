<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_cit',
        'pnom_ct',
        'email',
        'tel',
        'Pays',
        'ville_cit',
        'type_a'
    ];

    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}