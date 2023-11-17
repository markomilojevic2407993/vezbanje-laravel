<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ocene = Ocene::all();

        return view('home', compact('ocene'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'predmet' => 'required|string',
            'profesor' => 'required|string',
            'ocena' => 'required|numeric|min:1|max:5',
            'user_id' => 'required|numeric',
        ]);

        Ocene::create([
            'predmet' => $request->input('predmet'),
            'profesor' => $request->input('profesor'),
            'ocena' => $request->input('ocena'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect('/home');
    }
}
