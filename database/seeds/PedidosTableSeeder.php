<?php

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Pedido::create([
            'cliente_id'=> 1, 
            'pastel_id'=> 1
        ]);
        \App\Pedido::create([
            'cliente_id'=> 2, 
            'pastel_id'=> 1
        ]);
        \App\Pedido::create([
            'cliente_id'=> 2, 
            'pastel_id'=> 3
        ]);
        \App\Pedido::create([
            'cliente_id'=> 3, 
            'pastel_id'=> 2
        ]);
        \App\Pedido::create([
            'cliente_id'=> 3, 
            'pastel_id'=> 2
        ]);
    }
}
