<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $fillable = [ 'nome', 'email', 'telefone', 'data_nascimento', 'endereco', 'complemento', 'bairro', 'cep'];
    
    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
