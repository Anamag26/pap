<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Mamba/img/icon.png')}}" rel="icon">
  <link href="{{asset('Mamba/img/icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Mamba/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Mamba/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('Mamba/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Mamba/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('Mamba/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('Mamba/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('Mamba/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Mamba/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.5.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- End Header -->
    @include('mambapartes.navbar')
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>VER MAIS</h2>
                <ol>
                    <li>INICIO</li>
                    <li>VER MAIS</li>
                </ol>
            </div>
        </div>
    </section>
    <div class="container">
        <section id="contact" class="contact">
            <div class="container-fluid">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="section-title">
                    <h2>Lista do Pedidos {{$pedidos->denominacao}}</h2>
                </div>
                <div class="row pt-4">
                    <div class="col-lg-18" data-aos="fade-up" data-aos-delay="30">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form2">
                            <div class="form-row">
                                
                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Denominação da Empresa</b></h4>
                                    <h5 class="card-title">{{$pedidos->denominacao}}</h5>
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Contacto</b></h4>
                                    <h5 class="card-title">{{$pedidos->contacto}}</h5>
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>NIF</b></h4>
                                    <h5 class="card-title">{{$pedidos->nif}}</h5>
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Email</b></h4>
                                    <h5 class="card-title">{{$pedidos->Email}}</h5>
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Código Postal</b></h4>
                                    <h5 class="card-title">{{$pedidos->codpostal}}</h5>
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>CAE</b></h4>
                                    <h5 class="card-title">{{$pedidos->cae}}</h5>                        
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Data Início de Atividade</b></h4>
                                    <h5 class="card-title">{{$pedidos->datainicioativ}}</h5>                        
                                </div> 

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Natureza Jurídica</b></h4>
                                    <h5 class="card-title">{{$pedidos->Natureza}}</h5>                        
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Empresa cotada em bolsa</b></h4>
                                    <h5 class="card-title">{{$pedidos->cotadabolsa}}</h5>                                    
                                </div>
                   
                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Volume de negócios</b></h4>
                                    <h5 class="card-title">{{$pedidos->volumenegocios}}</h5>                                    
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Números de Trabalhadores</b></h4>
                                    <h5 class="card-title">{{$pedidos->nrtrabalhadores}}</h5>                                    
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Faturas Emitidas</b></h4>
                                    <h5 class="card-title">{{$pedidos->Faturasemitidas}}</h5>                                    
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Documentos Fornencedores</b></h4>
                                    <h5 class="card-title">{{$pedidos->docfornecedores}}</h5>                                  
                                </div>

                                <div class="col-lg-4 form-group">
                                    <h4 style="color:#5E8A75"><b>Número de documentos de bancos</b></h4>
                                    <h5 class="card-title">{{$pedidos->docbancos}}</h5>                               
                                </div>
                            </div>
                            
                            
                                <a href="{{route('pedidos.index')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto" >Voltar à Lista</a>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======= Footer ======= -->
@include('mambapartes.footer')

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('Mamba/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('Mamba/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<script src="{{asset('Mamba/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('Mamba/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('Mamba/js/main.js')}}"></script>

</body>

</html>
