<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Pedido;
use App\Pastel;

class PedidoController extends Controller
{
    public function index()
    {
        return  Pedido::with(['cliente', 'pastel'])->get();
    }

    public function store(Request $request)
    {
        $rules = [
            'cliente_id'          => 'required|exists:clientes,id',
            'pastel_id'         => 'required|exists:pastels,id',
        ];

        $messages = [
            'required'  => 'Campo :attribute obrigatorio.',
            'exists'    => ':attribute chave inexistente.'
        ];
        // validar se pedido foi realizado e enviar email   
        // $email = 'ed39c1c750-575134@inbox.mailtrap.io';
        // Mail::to($email)->send(new DemoMail());
        if($request->validate($rules,$messages)){
             Pedido::create($request->all());
             return json_encode(["message"=>"Enviado email de confirmação de seu pedido."]);
        }
        return Pedido::create($request->validate($rules,$messages));
        
    }

    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update($request->all());
        return $pedido;
    }
    public function show(Pedido $pedido)
    {
        return $pedido;
    }

    public function destroy(Request $request, Pedido $pedido)
    {
        $pedido->delete();
        return $pedido;
    }
}
