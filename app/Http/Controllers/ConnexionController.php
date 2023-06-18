<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function index()
    {
        return view('connexion');
    }

    public function login(Request $request)
    {
        // Validation des données du formulaire de connexion
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tenter de connecter l'utilisateur
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentification réussie
            return redirect()->route('accueil.utilisateur')->with('success', 'Connexion réussie.');
        } else {
            // Authentification échouée
            return back()->withErrors(['email' => 'Identifiants invalides. Veuillez réessayer.']);
        }
    }

}
