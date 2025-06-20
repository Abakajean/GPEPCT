<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'mont',
        'Moyen_paie',
        'citoyen_id',
    ];

    public function citoyen()
    {
        return $this->belongsTo(Citoyen::class);
    }
}