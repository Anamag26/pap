@extends('layouts.admin')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Responder Dúvidas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Responder Duvidass</li>
            </ol>
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Por Responder
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>email</th>
                                        <th>Assunto</th>
                                        <th>Menssagem</th>
                                        <th>Respondidas</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($formularios as $formulario) 
                                    <tr>
                                        <td>{{$formulario->nome}}</td>
                                        <td>{{$formulario->email}}</td>
                                        <td>{{$formulario->assunto}}</td>
                                        <td>{{$formulario->menssagem}}</td>

                                    


                                        <td>
                                            <div class="form-check">
                                                <center>
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                  
                                                </label> 
                                                </center>
                                               
                                            
                                        </td>
                                     

                                         
                                    </tr>
                                



                                    @empty 
                                    <p>Ainda sem pedidos aprovados</p> 
                                    @endforelse
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection