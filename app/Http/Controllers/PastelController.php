<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pastel;

class PastelController extends Controller
{
    public function index()
    {
        return  Pastel::all();
    }

    public function store(Request $request)
    {
        
        $rules = [
            'nome'          => 'required|max:150',
            'preco'         => 'required|max:25',
            'foto'          => 'required|max:150'
        ];

        $messages = [
            'required'  => 'Campo :attribute obrigatorio.',
            'unique'    => ':attribute não pode ser repetido.',
            'max'       => ':attribute ultrapassou o máximo de caracteres.'
        ];

        return Pastel::create($request->validate($rules,$messages));
    }

    public function update(Request $request, Pastel $pastel)
    {
        $pastel->update($request->all());
        return $pastel;
    }
    public function show(Pastel $pastel)
    {
        return $pastel;
    }

    public function destroy(Request $request, Pastel $pastel)
    {
        $pastel->delete();
        return $pastel;
    }
}
