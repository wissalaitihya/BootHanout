<?php

namespace App\Models;

use App\Enums\StatutRecu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recu extends Model
{
    protected $fillable = [
     'user_id',
     'text_source',
     'statut',
     'payload_ai',
    ];

    protected $casts = [
        'statut' => StatutRecu::class,
        'payload_ai' => 'array',
    ];

    public function user(): BelongsTo
    {
      return $this -> belongTo(User::class);
    }

    public function depenses(): HasMany
    {
        return $this->hasMany(Depense::class);
    }
}

