<?php

namespace App\Http\Controllers;
use App\Models\pedido;
use App\Models\formularios;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = pedido::where("status","=",2)->get();
        return view('Admin.recusados',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = pedido::where("status","=",1)->get();
        return view('Admin.aceites',compact('pedidos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

  
   






















   
}
