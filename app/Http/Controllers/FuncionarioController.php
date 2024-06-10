<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario; 

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $funcionario = new funcionario([
            'nome' => $request->input('nome'),
            'funcao' => $request->input('funcao')
        ]);

        $funcionario->save();

        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $funcionario = Funcionario::findOrfail($id);

        return view('funcionarios.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = Funcionario::findOrfail($id);

        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $funcionario = Funcionario::findOrfail($id);
        $funcionario->nome = $request->input('nome');
        $funcionario->funcao = $request->input('funcao');

        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $funcionario = Funcionario::findOrfail($id);
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
