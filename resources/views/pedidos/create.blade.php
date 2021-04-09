@extends('layouts.base')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Página de Pedidos</h2>
        <ol>
          <li><a href="index.html">inicio</a></li>
          <li>Página de Pedidos</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="contact" class="contact">
          <div class="container">
            
             @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
              @endif 
  
            <div class="section-title">
              <h2>Pedidos de serviços</h2>
            </div>
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
             @endif
              <div class="row">
              <div class="col-lg-12">
                  <form action="{{route('pedidos.store')}}" method="POST"  class="php-email-form2">
                      @csrf
                    <div class="form-row">
                    
                      <div class="col-lg-6 form-group">

                        <input type="text" name="denominacao" class="form-control" value ="{{old('denominacao')}}" id="denominacao" placeholder="Denominação da sua Empresa" data-rule="minlen:2"  />
                        <div class="validate"></div>
                        @error('denominacao')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div class="col-lg-6 form-group">

                        <input type="Integer" name="contacto" class="form-control"  value ="{{old('contacto')}}" id="contacto" placeholder="Contacto" data-rule="minlen:9" data-msg="Por favor Insira seu numero de telefone!" />
                        <div class="validate"></div>
                        @error('contacto')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        
                      </div>

                      <div class="col-lg-6 form-group">

                        <input type="Integer" name="nif" class="form-control"  value ="{{old('nif')}}" id="nif" placeholder="NIF" data-rule="minlen:9" data-msg="Por favor Insira pelo mnos 9 carateres!" />
                        <div class="validate"></div>
                        @error('nif')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>

                  
                      <div class="col-lg-6 form-group">
                       
                        <input type="email" class="form-control" name="Email" value ="{{old('Email')}}" id="Email" placeholder="Email" data-rule="Email" data-msg="por favor digite um email " />
                        <div class="validate"></div>
                        @error('Email')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div class="col-lg-6 form-group">
                        <input type="Integer" class="form-control" name="Codpostal" value ="{{old('Codpostal')}}" id="Codpostal" placeholder="Código Postal" data-rule="minlen:8" data-msg="por favor digite um codigo postal " />
                        <div class="validate"></div>
                        @error('Codpostal')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div class="col-lg-6 form-group">
                        <input type="number" class="form-control" name="cae" value ="{{old('cae')}}" id="cae" placeholder="CAE" data-rule="minlen:2" data-msg="por favor digite um CAE válido" />
                        <div class="validate"></div>
                        @error('cae')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>

                      <div class="col-lg-6 form-group">
                        <h6>Data de início de atividade</h6>
                        <input type="date" class="form-control" name="datainicioativ" value ="{{old('datainicioativ')}}" id="datainicioativ" placeholder="Data de início de atividade "  data-msg="por favor digite uma data válida" />
                        <div class="validate"></div>
                        @error('datainicioativ')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>

                      <div class="col-lg-6 form-group">
                        <h6> Mercados
                        </h6>
                        @foreach ($mercados as $mercado)
                        <input type="checkbox" id="mercados" name="mercados[]" value="{{$mercado->id}}">
                        <label for="vehicle1"> {{$mercado->opcao}}</label><br>
                        @endforeach

                        @error('{{$mercado->id}}')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="col-lg-6 form-group">
                        <input type="text" class="form-control" name="Natureza" value ="{{old('Natureza')}}" id="Natureza" placeholder="Natureza Jurídica" data-rule="minlen:2" data-msg="por favor digite uma Natureza válida" />
                        <div class="validate"></div>
                        @error('Natureza')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                      <div class="col-lg-6 form-group">

                        <input type="text" name="cotadabolsa" value ="{{old('cotadabolsa')}}" class="form-control" id="cotadabolsa" placeholder="Empresa cotada em bolsa" data-rule="minlen:2" data-msg="Por favor Insira pelo menos 2 caracteres" />
                        <div class="validate"></div>
                        @error('cotadabolsa')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                      
                      <div class="col-lg-6 form-group">
                        
                        <input type="number" name="volumenegocios" value ="{{old('volumenegocios')}}" class="form-control" id="volumenegocios" placeholder="Volume de negócios" data-rule="minlen:2" data-msg="Por favor Insira pelo menos 2 caracteres" />
                        <div class="validate"></div>
                        @error('volumenegocios')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>

                      <div class="col-lg-6 form-group">

                        <input type="number" name="nrtrabalhadores" value ="{{old('nrtrabalhadores')}}"class="form-control" id="nrtrabalhadores" placeholder="Número de trabalhadores" data-rule="minlen:2" data-msg="Por favor Insira pelo menos 2 caracteres" />
                        <div class="validate"></div>
                        @error('nrtrabalhadores')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>

                      <div class="col-lg-6 form-group">

                        <input type="number" name="Faturasemitidas" value ="{{old('Faturasemitidas')}}" class="form-control" id="Faturasemitidas" placeholder="Número de faturas emitidas" data-rule="minlen:2" data-msg="Por favor Insira pelo menos 2 caracteres" />
                        <div class="validate"></div>
                        @error('Faturasemitidas')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>

                      <div class="col-lg-6 form-group">

                        <input type="number" name="docfornecedores" value ="{{old('docfornecedores')}}" class="form-control" id="docfornecedores" placeholder="Número de documentos de fornecedores" data-rule="minlen:2" data-msg="Por favor Insira pelo menos 2 caracteres" />
                        <div class="validate"></div>
                        @error('docfornecedores')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>

                      <div class="col-lg-6 form-group">

                        <input type="number" name="docbancos" value ="{{old('docbancos')}}" class="form-control" id="docbancos" placeholder="Número de documentos de bancos" data-rule="minlen:2" data-msg="Por favor Insira pelo menos 2 caracteres" />
                        <div class="validate"></div>
                        @error('docbancos')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div> 
                     
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" >Fazer Pedido</button>   
                    </div>
                   
                </form>
            </div>
              </div>
          </div>
        </section>
         
  
    

</main><!-- End #main -->


@endsection





  