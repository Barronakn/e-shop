<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\DeconnexionController;


Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'register']);
Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion');
Route::post('/connexion', [ConnexionController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::get('/accueil', [AccueilController::class, 'dashboard'])->name('accueil.utilisateur');
    Route::get('/shops', [ProduitController::class, 'index'])->name('shops');
    Route::get('/shop/{id}', [ProduitController::class, 'show'])->name('shop');
    Route::get('/cart', [CarteController::class, 'index'])->name('cart');
    Route::post('/cart/add/{id}', [CarteController::class, 'add'])->name('cart.add');
    Route::get('/cart/decrease-quantity/{cartItemId}', [CarteController::class, 'decreaseQuantity'])->name('cart.decreaseQuantity');
    Route::delete('/cart/remove/{cartItemId}', [CarteController::class, 'remove'])->name('cart.remove');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact');
    Route::get('/mon-compte', [CompteController::class, 'index'])->name('compte');
    Route::get('/formulaire-paiement', [PaiementController::class, 'index'])->name('formulaire-paiement');
    Route::post('/payment/process', [PaiementController::class, 'processPayment'])->name("payment.process");
    Route::get('/deconnexion', [DeconnexionController::class, 'logout'])->name('deconnexion');
});

