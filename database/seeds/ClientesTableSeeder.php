<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Cliente::create([
            'nome' => 'Fulano 07', 
            'email'=> 'fulano01@email.com', 
            'telefone'=> '22554411', 
            'data_nascimento'=> '1955-05-06',
            'endereco'=> 'Rua Tal e Coisa', 
            'complemento'=> 'Sala 01',
            'bairro'=> 'Filadelphia',
            'cep'=> '22451-023'
        ]);
        \App\Cliente::create([
            "nome"=> "Fulano Dois",
            "email"=> "fulano2@fulano.com",
            "telefone"=> "21 54789654",
            "data_nascimento"=> "1978-02-25",
            "endereco"=> "Rua das Camelias",
            "complemento"=> "Apt 502",
            "bairro"=> "Cascaveis",
            "cep"=> "22856-023"
        ]);
        \App\Cliente::create([
            "nome"=> "Fulano",
            "email"=> "roberto_d@google.com",
            "telefone"=> "22445566",
            "data_nascimento"=> "1980-12-12",
            "endereco"=> "Estrada da Boiuna",
            "complemento"=> "Casa",
            "bairro"=> "Taquara",
            "cep"=> "22723-020"
        ]);
    }
}
