<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pastel extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'preco', 'foto'];

    public function pastel()
    {
        return $this->hasMany('App\Pastel');
    }
}
