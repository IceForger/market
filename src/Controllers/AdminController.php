<?php

namespace Plugins\Market\Controllers;

use Azuriom\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('market::admin.manage');
    }

    public function save(Request $request)
    {
        // Logique pour sauvegarder les paramètres du marché
        return redirect()->route('market.admin.index')->with('success', 'Données sauvegardées !');
    }
}
