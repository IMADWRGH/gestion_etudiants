<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function index()
    {
        $list_etudiants = Etudiant::all();
        return view('etudiants.index', ['etudiants' => $list_etudiants]);
    }

    public function create()
    {
        return view('etudiants.form');
    }

    public function store(Request $request)
    {
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->sexe = $request->sexe;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->save();
        return redirect('/etudiants');
    }

    public function show(string $id)
    {
        return view('etudiants.show', ['etudiant' => Etudiant::find($id)]);
    }

    public function edit(string $id)
    {
        return view('etudiants.edit', ['etudiant' => Etudiant::find($id)]);
    }

    public function update(Request $request, string $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->sexe = $request->sexe;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->save();
        return redirect('/etudiants');
    }

    public function destroy(string $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiants');
    }
}
