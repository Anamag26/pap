<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'denominacao',
        'contacto',
        'nif',
        'Email',
        'Codpostal',
        'cae',
        'datainicioativ',
        'Natureza',
        'cotadabolsa',
        'volumenegocios',
        'nrtrabalhadores',
        'Faturasemitidas',
        'docfornecedores',
        'docbancos',
    ];
    public function mercados()
    {
        return $this->belongsToMany(mercados::class,'pedidos_mercados');
    }
}

