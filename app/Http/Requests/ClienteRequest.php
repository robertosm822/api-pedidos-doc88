<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'              => 'required',
            'email'             => 'required|email|max:150',
            'telefone'          => 'required|max:20',
            'data_nascimento'   => 'required|max:10',
            'complemento'          => 'max:80',
            'endereco'          => 'required|max:150',
            'bairro'            => 'required|max:100',
            'cep'               => 'required|max:10'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required',
            'string'    => 'The :attribute must be text format',
            'file'    => 'The :attribute must be a file',
            'mimes' => 'Supported file format for :attribute are :mimes',
            'max'      => 'The :attribute must have a maximum length of :max',
            'email' => 'Email já existe na base.'
          ];
    }
}
