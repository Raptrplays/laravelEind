<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coureur;


class CoureurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $coureurs = Coureur::all();
      return view('index', ['coureurs' => $coureurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Voornaam' => 'required|string|max:255',
            'Achternaam' => 'required|string|max:255',
            'Team' => 'required|string|max:255',
            'Contract' => 'required|numeric',
        ]);

        $man = new Coureur;
        $man->Voornaam = $validatedData['Voornaam'];
        $man->Achternaam = $validatedData['Achternaam'];
        $man->Team = $validatedData['Team'];
        $man->Contract = $validatedData['Contract'];
        $man->save();
        return redirect('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $validated = request()->validate([
            'id' => 'integer'
        ]);

        $is = Coureur::where('id', $id)->get();
        return view('detail', ['coureurs' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $validated = request()->validate([
            'id' => 'integer'
        ]);

        $man = Coureur::find($id);
        return view('edit', compact( 'man' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'Voornaam' => 'required|string|max:255',
            'Achternaam' => 'required|string|max:255',
            'Team' => 'required|string|max:255',
            'Contract' => 'required|numeric',
        ]);

        $man = Coureur::find($id);
        $man->Voornaam = $validatedData['Voornaam'];
        $man->Achternaam = $validatedData['Achternaam'];
        $man->Team = $validatedData['Team'];
        $man->Contract = $validatedData['Contract'];
        $man->save();
        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $man = Coureur::find($id);
        $man->delete();
        return redirect('index');
    }
}
