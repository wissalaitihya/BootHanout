<?php

namespace App\Http\Controllers;

use App\Http\Request\StoreRecuRequest;
use App\Jobs\ExtraireDepenseDuRecu;
use App\Models\Recu;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RecuController extends Controller
{
   
    public function index(): View
    {
        $recus = auth()->user()->resus()->with('depenses')->latest()->get();
        return View('recus.index', compact('recus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
