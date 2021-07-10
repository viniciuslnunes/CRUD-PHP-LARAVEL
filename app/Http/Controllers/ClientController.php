<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
    {
        $clientes = Client::all();
        return view('site.clients.index', compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nome' => ['required', 'unique:clients', 'max:150'],
            'cpf' => ['required', 'unique:clients', 'max:14'],
            'data_nasc' => ['required'],
            'data_cadastro' => ['required'],
            'renda' => ['required', 'max:15'],
        ]);

        $clientes = $request->all();
        Client::create($clientes);
        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Client::findOrFail($id);
        return view('site.clients.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Client::find($id);
        return view('site.clients.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = Client::find($id);
        request()->validate([
            'nome_empresa'      => ['required',  'max:100'],
            'cnpj'              => ['required', 'max:18'],
            'nome_responsavel'  => ['required', 'max:100'],
            'email'             => ['required', 'max:100'],
            'celular'           => ['required', 'max:15'],
        ]);
        $clientes->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Client $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente deletado com sucesso');    
    }
}
