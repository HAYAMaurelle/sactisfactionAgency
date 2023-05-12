<?php

namespace App\Http\Controllers;

use App\Models\inscription as InscriptionModel;
use Illuminate\Http\Request;


class inscription extends Controller
{public $name;
    public $firstname;
    public $email;
    public $password;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        // Créer une nouvelle inscription
        $inscription = new InscriptionModel;
        $inscription->name= $request->name;
        $inscription->firstname = $request->firstname;
        $inscription->email = $request->email;
        $inscription->password = $request->password;

        // Enregistrer l'inscription dans la base de données
        
        $inscription->save();

        // Rediriger l'utilisateur vers la page de confirmation
        return redirect('/appartements');
    }
        //
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
