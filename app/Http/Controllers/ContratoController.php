<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Cliente;
use App\Models\Solicitacao;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratos = Contrato::all();

        return view('contratos.index', compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        
        return view('contratos.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required',
            'valor_total' => 'required',
            'cliente_id' => 'required|exists:clientes,id'
        ]);

        Contrato::create($request->all());

        return redirect()->route('contratos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $solicitacoes = Solicitacao::where('contrato_id', $id)->get();
        
        return view('contratos.solicitacoes', compact('solicitacoes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contrato = Contrato::findOrfail($id);

        $clientes = Cliente::all();
        
        return view('contratos.edit', compact('contrato', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contrato = Contrato::findOrFail($id);
        
        $contrato->update($request->all());
        return redirect()->route('contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();
        return redirect()->route('contratos.index');
    }
}
