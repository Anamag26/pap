<?php

namespace App\Http\Controllers;
use App\Models\pedido;
use App\Models\User;
use App\Models\mercados;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
        $pedidos = pedido::all();
        return view('pedidos.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mercados = mercados::all();
        return view('pedidos.create' , compact('mercados'));
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
         'denominacao'=> 'required|min:3|max:255',
         'contacto'=> 'required|min:9|max:255',
         'nif' => 'required|min:9|max:255',
         'Email' => 'required|min:4|max:40',
         'Codpostal'=> 'required|min:7|max:8',
         'cae'=> 'required|min:2|max:255',
         'datainicioativ'=> 'required',
         'Natureza'=> 'required|min:2|max:255',
         'cotadabolsa'=> 'required|min:2|max:255',
         'volumenegocios'=> 'required|min:2|max:255',
         'nrtrabalhadores'=> 'required|min:2|max:255',
         'Faturasemitidas'=> 'required|min:2|max:255',
         'docfornecedores'=> 'required|min:2|max:255',
         'docbancos'=> 'required|min:2|max:255',

         ]);

        //garvar imformação na BD
        $pedidos= new pedido;
        $pedidos->denominacao=$data['denominacao'];
        $pedidos->contacto=$data['contacto'];
        $pedidos->nif=$data['nif'];
        $pedidos->Email=$data['Email'];
        $pedidos->Codpostal=$data['Codpostal'];
        $pedidos->cae=$data['cae'];
        $pedidos->datainicioativ=$data['datainicioativ'];
        $pedidos->Natureza=$data['Natureza'];
        $pedidos->cotadabolsa=$data['cotadabolsa'];
        $pedidos->volumenegocios=$data['volumenegocios'];
        $pedidos->nrtrabalhadores=$data['nrtrabalhadores'];
        $pedidos->Faturasemitidas=$data['Faturasemitidas'];
        $pedidos->docfornecedores=$data['docfornecedores'];
        $pedidos->docbancos=$data['docbancos'];
        $pedidos->save();
        
        $pedidos->mercados()->attach(request('mercados'));
        //preparar mensagem de feedback
        $pedidos = pedido::all();
        return redirect()->back()->with('success', 'O seu pedido foi enviado com sucesso');;
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $pedidos = pedido::findOrFail($id);
        return view('pedidos.show',compact('pedidos'));
    }

    /**
     * show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    
    
    }
    
    public function pendente($id){
        $pedidos = pedido::findOrFail($id);
        $pedidos->status = 0; 
        $pedidos->save();
        return redirect('/home'); //Redirect user somewhere
     }

    public function aprovada($id){
        $pedidos = pedido::findOrFail($id);
        $pedidos->status = 1; 
        $pedidos->save();
        return redirect('/admin/create'); //Redirect user somewhere
     }

     public function recusada($id){
        $pedidos = pedido::findOrFail($id);
        $pedidos->status = 2; 
        $pedidos->save();
        return redirect('/admin'); //Redirect user somewhere
     }

     public function irs(){
        return view('pedidos.entregairs'); //Redirect user somewhere
     }

     public function segurancasocial(){
         return view('pedidos.segurancasocial');
     }

     public function irs–dmr(){
        return view('pedidos.irs–dmr');
    }

    public function faturas(){
        return view('pedidos.faturas');
    }

    public function intrastat(){
        return view('pedidos.intrastat');
    }

    public function modelo11(){
        return view('pedidos.modelo11');
    }
    
    public function ces(){
        return view('pedidos.ces');
    }
    
    public function iva(){
        return view('pedidos.iva');
    }
    
    public function fct(){
        return view('pedidos.fct');
    }
    
    public function cga(){
        return view('pedidos.cga');
    }
 
     
}
