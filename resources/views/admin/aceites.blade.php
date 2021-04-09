@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Pedidos Aceites</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Pedidos Aceites</li>
                </ol>
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Pedios de serviço
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Denominação</th>
                                            <th>Contacto</th>
                                            <th>NIF</th>
                                            <th>Email</th>
                                            <th>Codpostal</th>
                                            <th>CAE</th>
                                            <th>Data Ativivdade</th>
                                            <th>Natureza Juridica</th>
                                            <th>cotada bolsa</th>
                                            <th>volume de negócios</th>
                                            <th>números Trabalhadores</th>
                                            <th>Faturas Emitidas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pedidos as $pedidos) 
                                        <tr>
                                            <td>{{$pedidos->denominacao}}</td>
                                            <td>{{$pedidos->contacto}}</td>
                                            <td>{{$pedidos->nif}}</td>
                                            <td>{{$pedidos->Email}}</td>
                                            <td>{{$pedidos->Codpostal}}</td>
                                            <td>{{$pedidos->cae}}</td>
                                            <td>{{$pedidos->datainicioativ}}</td>
                                            <td>{{$pedidos->Natureza}}</td>
                                            <td>{{$pedidos->cotadabolsa}}</td>
                                            <td>{{$pedidos->volumenegocios}}</td>
                                            <td>{{$pedidos->nrtrabalhadores}}</td>
                                            <td>{{$pedidos->Faturasemitidas}}</td>
    
                                        
                                            <td>

                                                <form action="{{route('pedidos.pendente',$pedidos->id)}}">
                                                    <button class="btn btn-warning"type="submit">Cancelar</button>
                                                </form>    

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
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
  
@endsection