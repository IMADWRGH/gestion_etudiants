<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_filieres = Filiere::all();
        return view('filieres.index', ['filieres' => $list_filieres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filieres.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filiere = new Filiere();
        $filiere->nom = $request->nom;
        $filiere->save();
        return redirect('/filieres');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('filieres.show', ['filiere' => Filiere::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('filieres.edit', ['filiere' => Filiere::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->nom = $request->nom;
        $filiere->save();
        return redirect('/filieres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect('/filieres');
    }
}
