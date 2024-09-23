<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Corriger l'utilisation du namespace déjà importé
Route::get('/Accueil', [AccueilController::class, 'index'])->name('Accueil');
Route::get('/Tracking', [TrackingController::class, 'index'])->name('Tracking');
Route::get('/Contact', [ContactController::class, 'index'])->name('Contact');

// Route pour les requêtes GET (afficher la page d'accueil)
Route::get('/accueil', [AccueilController::class, 'index']);

// Route pour les requêtes POST (par exemple, traitement de formulaire)
Route::post('/accueil', [AccueilController::class, 'store']);



