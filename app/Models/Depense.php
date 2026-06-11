<?php

namespace App\Models;

use App\Enums\CategorieDepense;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Depense extends Model
{
    protected $fillable = [
     'recu_id',
     'quantite',
     'prix_unitaire',
     'libelle',
     'categorie',
    ];

    protected $casts = [
        'categorie' => CategorieDepense::class,
        'quantite' => 'integer',
        'prix_unitaire' => 'decimal:2',
    ];

    public function recu(): BelongsTo 
    {
     return $this->belongsTo(Recu::class);
    } 
}
