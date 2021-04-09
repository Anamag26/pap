<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mercados extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nacional',
        'Intercomunitario',
        'RestoMundo',

       ];
       public function  pedidos()
    {
        return $this->belongsToMany(pedido::class,'pedidos_mercados');
    }

}
