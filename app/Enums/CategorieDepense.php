<?php

namespace App\Enums;

enum CategorieDepense: string
{
   case Alimentaire = 'alimentaire';
   case Boissons = 'boissons';
   case Hygiene = 'hygiene';
   case Entretien = 'entretien';
   case Autre = ' autre';

   public function label(): string
   {
    return match($this) {
    self::Alimentaire => 'alimentaire',
    self::Boissons => 'boissons',
    self::Hygiene => 'hygiene',
    self::Entretien => 'entretien',
    self::Autre => 'autre',
    };
   }
}