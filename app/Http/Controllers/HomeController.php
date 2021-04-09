<?php

namespace App\Http\Controllers;
use App\Models\pedido;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $pedidos = pedido::where("status","=",0)->get();
         return redirect ('/home', compact('pedidos'));

       
    }
}
