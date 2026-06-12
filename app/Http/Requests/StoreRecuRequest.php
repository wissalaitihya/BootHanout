<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRecuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'text_source' => ['requeried','string','min:10','max:5000'],
        ];
    }

    public function message(): array
    {
     return [
        'text_source_required' => 'le texte du recu est obligatoire ',
        'text_source_min' => 'Le texte doit contenir au moins 10 caractères',
        'text_source_max' => 'Le texte ne peut pas dépasser 5000 caractères',
     ];
    }
}
