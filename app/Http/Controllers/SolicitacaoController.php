<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solicitacao;
use App\Models\Contrato;
use App\Models\Servico;


class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $solicitacoes = Solicitacao::all();

        return view('solicitacoes.index', compact('solicitacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contratos = Contrato::all();
        $servicos = Servico::all();
        return view('solicitacoes.create', compact('contratos', 'servicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'preco_final' => 'required',
            'contrato_id' => 'required|exists:contratos,id',
            'servico_id' => 'required|exists:servicos,id'
        ]);

        Solicitacao::create($request->all());

        return redirect()->route('solicitacoes.index')->with('success', 'Solictação criada com sucesso!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $solicitacao = Solicitacao::findOrfail($id);
        
        return view('solicitacoes.show', compact('solicitacao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $solicitacao = Solicitacao::findOrfail($id);

        $contratos = Contrato::all();
        $servicos = Servico::all();

        return view('solicitacoes.edit', compact('solicitacao', 'contratos','servicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $solicitacao = Solicitacao::findOrFail($id);
        
        $solicitacao->update($request->all());
        return redirect()->route('solicitacoes.index')->with('success', 'Solicitação atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $solicitacao = Solicitacao::findOrFail($id);
        $solicitacao->delete();
        return redirect()->route('solicitacoes.index')->with('success', 'Solicitação excluído com sucesso!');
    }
}
