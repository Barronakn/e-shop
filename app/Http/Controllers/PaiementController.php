<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        return view('formulaire-paiement');
    }

    public function processPayment(Request $request)
    {
        // Logique de traitement du paiement
    }
}
