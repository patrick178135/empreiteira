<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidades = Cidade::all();
        return view('cidades.index', compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cidade = new Cidade([
            'nome' => $request->input('nome'),
            'uf' => $request->input('uf')
        ]);
        $cidade->save();

        return redirect()->route('cidades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cidade = Cidade::findOrfail($id);
        
        return view('cidades.show', compact('cidade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $cidade = Cidade::findOrFail($id);
   
        return view('cidades.edit', compact('cidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->nome = $request->input('nome');
        $cidade->uf = $request->input('uf');
    
        $cidade->save();
        return redirect()->route('cidades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();
        return redirect()->route('cidades.index');
    }
}
