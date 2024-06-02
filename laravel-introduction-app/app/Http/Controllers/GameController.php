<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games; 

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Games::all();
        return view('game.tampil', ['games' => $game]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'gameplay' => 'required',
            'developer' => 'required',
            'year' => 'required|numeric',
        ], [
            'name.required' => 'Nama Harus di Isi',
            'gameplay.required' => 'Gameplay Harus di Isi',
            'developer.required' => 'Developer Harus di Isi',
            'year.required' => 'Tahun Harus di Isi',
        ]);
    
        $game = new Games; 
        $game->name = $request->input('name');
        $game->gameplay = $request->input('gameplay');
        $game->developer = $request->input('developer');
        $game->year = $request->input('year');
    
        $game->save();
    
        return redirect()->route('game.index')->with('success', 'Game berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Games::find($id); 

        return view('game.detail', ['Games' => $Games]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Games::find($id); 
    
        return view('game.edit', ['game' => $game]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'gameplay' => 'required',
            'developer' => 'required',
            'year' => 'required|numeric',
        ], [
            'name.required' => 'Nama Harus di Isi',
            'gameplay.required' => 'Gameplay Harus di Isi',
            'developer.required' => 'Developer Harus di Isi',
            'year.required' => 'Tahun Harus di Isi',
        ]);

        $game = Games::findOrFail($id); 
        $game->name = $request->input('name');
        $game->gameplay = $request->input('gameplay');
        $game->developer = $request->input('developer');
        $game->year = $request->input('year');

        $game->save();

        return redirect('/game');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Games::findOrFail($id);
        $game->delete(); 
    
        return redirect()->route('game.index')->with('success', 'Game berhasil dihapus.');
    }
    

}
