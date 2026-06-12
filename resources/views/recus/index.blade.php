@extends('layouts.app')

@section('content')
<div>
    <h1>Mes Reçus</h1>
</div>

@forelse ($recus as $recu)
    <div>
        <div>
            <span>{{ $recu->created_at->format('d/m/Y') }}</span>
            <p>{{ Str::limit($recu->texte_source, 80) }}</p>
        </div>

        <div>
            <span class="{{ $recu->statut->badgeClass() }}">
                {{ $recu->statut->label() }}
            </span>
            <span>{{ $recu->depenses->count() }} article(s)</span>
        </div>
    </div>
@empty
    <p>Aucun reçu pour l'instant.</p>
@endforelse
@endsection