<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// DeconnexionController
class DeconnexionController extends Controller
{
    public function logout()
    {
        Auth::logout();

        return redirect()->route('accueil')->with('success', 'Déconnexion réussie.');
    }
}

