<?php
namespace App\Enums;

enum StatutRecu: string
{
    case EnAttente = 'en_attente';
    case Traite = 'traite';
    case Echoue = 'echoue';
    public function label(): string
    {
      return match($this) {
        self::EnAttente=>'en_attente',
        self::Traite => 'traite',
        self::Echoue => 'echoue',
      };
    }

    public function badgeClass(): string
    {
        return match($this){
        self::EnAttente => 'badge-warning',
        self::Traite => 'badge-success',
        self::Echoue => 'badge-danger',
        };
    }
}