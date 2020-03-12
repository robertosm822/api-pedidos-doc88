<?php

use Illuminate\Database\Seeder;

class PastelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Pastel::create([
            'nome'=> 'Pastel de Frango', 
            'preco'=> 9.50,
            'foto'=> 'img/pastel_frango.jpg'
        ]);
        \App\Pastel::create([
            'nome'=> 'Pastel de Queijo', 
            'preco'=> 9.50,
            'foto'=> 'img/pastel_queijo.jpg'
        ]);
        \App\Pastel::create([
            'nome'=> 'Pastel de Carne', 
            'preco'=> 9.80,
            'foto'=> 'img/pastel_carne.jpg'
        ]);
    }
}
