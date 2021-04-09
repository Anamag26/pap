<?php

namespace App\Http\Controllers;
use App\Models\formulario;
use Illuminate\Http\Request;

class formularioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formularios = formulario::all();
        return view('formulario.responder',compact('formularios'));
    }
    
    public function create()
    {
        $formularios = formulario::all();
        return view('formulario.create',compact('formularios'));
    }
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'nome'=> 'required|min:3|max:255',
        'email'=> 'required|min:9|max:255',
        'assunto' => 'required|min:9|max:255',
        'menssagem' => 'required|min:4|max:40',
           
          
        ]);

        //garvar imformação na BD
        $formularios= new formulario;
        
        $formularios->nome=$data['nome'];
        $formularios->email=$data['email'];
        $formularios->assunto=$data['assunto'];
        $formularios->menssagem=$data['menssagem'];
    
        $formularios->save();
        //preparar mensagem de feedback
        return redirect()->back()->with('success', 'A sua mensagem foi enviada com sucesso');
        //redirect()->back()
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formularios = formulario::findOrFail($id);
        return view('formulario.vermais',compact('formularios'));

        
        
    }
    
     

}
