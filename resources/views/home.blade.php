@extends('layouts.admin')
@section('content')

  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid">
              <h1 class="mt-4">Bem vindo</h1>
              <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Página Inicial</li>
            </ol>
              <div class="row"> 
                  <div class="col-xl-3 col-md-6">
                     
              </div>
              <div class="container-fluid">
                <h1 class="mt-4">Todos os pedidos pendentes</h1>
                <div class="container-fluid">
                    <div class="card mb-4"> 
                       
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Pedidos de serviço
                        </div>
                        
                        <div class="card-body">
                             
                            <div class="table-responsive">
                               
                                <table class="table table-bordered"  method="post" id="dataTable" width="100%" cellspacing="0">
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
                                            <th> status </th>

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
                                               
                                                <form action="{{route('pedidos.aprovada',$pedidos->id)}}">
                                                    <button class="btn btn-success"type="submit">Aprovar</button>
                                                </form>      
                                                <p></p>
                                                <form action="{{route('pedidos.recusada',$pedidos->id)}}">
                                                    <button class="btn btn-danger"type="submit">Recusar</button>
                                                </form>      
                                                </form>                                                 

                                            </td> 
                                             
                                        </tr>
                                        @empty 
                                    <p>Ainda sem pedidos</p> 
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
  </div>
</div>


@endsection
