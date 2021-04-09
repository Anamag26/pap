<?php

namespace App\Http\Controllers;
use App\Models\pedido;
use App\Models\mercados;
use App\Models\formulario;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $pedidos = pedido::orderby('pedidos');
        $formularios = formulario::orderby('formularios');
        $mercados = mercados::all();
    
        return view ('inicio', compact('pedidos','formularios','mercados'));
    }

}
