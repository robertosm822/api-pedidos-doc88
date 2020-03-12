<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;
    protected $fillable = ['cliente_id', 'pastel_id'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function pastel()
    {
        return $this->belongsTo('App\Pastel');
    }
}
