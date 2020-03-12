<?php

namespace App\Http\Controllers;

// use App\Http\Requests\ClienteRequest as Request;
use Illuminate\Http\Request;

use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        return  Cliente::all();
    }

    public function store(Request $request)
    {
        $rules = [
            'nome'              => 'required',
            'email'             => 'required|email|unique:clientes|max:150',
            'telefone'          => 'required|max:20',
            'data_nascimento'   => 'required|max:10',
            'complemento'          => 'max:80',
            'endereco'          => 'required|max:150',
            'bairro'            => 'required|max:100',
            'cep'               => 'required|max:10'
        ];
        
        $messages = [
            'required'  => 'Campo :attribute obrigatorio.',
            'unique'    => ':attribute não pode ser repetido',
            'message'   => 'Erros nos dados enviados!'
        ];
        
        return Cliente::create($request->validate($rules,$messages));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return $cliente;
    }
    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    public function destroy(Request $request, Cliente $cliente)
    {
        $cliente->delete();
        return $cliente;
    }
}
