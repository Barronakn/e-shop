<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

    // InscriptionController
class InscriptionController extends Controller
{
    public function index()
    {
        return view('inscription');
    }

    public function register(Request $request)
    {
        // Validation les données du formulaire d'inscription
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Création un nouvel utilisateur
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Rediriger l'utilisateur vers la page de connexion
        return redirect()->route('connexion')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }
}

