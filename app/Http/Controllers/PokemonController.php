<?php

namespace App\Http\Controllers;
use App\Models\Pokemon;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index() {
        $varPokemon = Pokemon::all();
        return view('welcome', compact('varPokemon'));
    }

    public function create() {
        return view('pages.createPokemon');
    }

    public function store(Request $request) {
        $pokemon = new Pokemon();
        $pokemon->nom = $request->nom;
        $pokemon->type = $request->type;
        $pokemon->niveau = $request->niveau;
        $pokemon->save();
        return redirect()->route('pokemon.index');

    }
}
