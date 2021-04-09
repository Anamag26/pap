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
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Listas dos seus Pedidos</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Página de Pedidos</li>
        </ol>
      </div>
    </div>
  </section>
    <section class="inner-page">
      

      <div class="container">
        <p>
          <section id="contact" class="contact">
            <div class="container">
              <div class="section-title">
                <h2>Listas dos seus Pedidos</h2>
              </div>

              @forelse ($pedidos as $pedidos) 
                <div class="row pt-4">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="30">
                    <form action="forms/contact.php" method="post"  class="php-email-form2">
                      <div class="form-row">
                       
                        <div class="col-lg-6 form-group">
  
                          <h3>Denominação da empresa</h3>
                          <h5 class="card-title">{{$pedidos->denominacao}}</h5>
                          
                        </div>
                         <div class="col-lg-6 form-group">
  
                          <h3>Contacto</h3>
                          <h5 class="card-title">{{$pedidos->contacto}}</h5>
                          
                        </div>
                        <div class="col-lg-6 form-group">
  
                          <h3>Email </h3>
                          <h5 class="card-title">{{$pedidos->Email}}</h5>
                          
                        </div>

                        <div class="col-lg-6 form-group">
  
                          <h3>Status</h3>
                          @if($pedidos->status==0)
                        <h5 class="card-title" style="color:rgb(230, 190, 15);">Pendente</h5>
                        @elseif($pedidos->status==1)
                        <h5 class="card-title"style="color:MediumSeaGreen;">Aceite</h5>
                        @elseif($pedidos->status==2)
                        <h5 class="card-title"style="color:Tomato;">Recusada</h5>
                        @endif
                        </div>
                        <div class="form-group">
                         
                          <a href="{{route('pedidos.show',$pedidos->id)}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver Mais</a>
                          
   
                        </form>
                      </div>
                    </div>
                  </div>
                </p>
              </div>
              @empty 
              <p>Ainda sem Pedidos</p>
              @endforelse
            </section>
        
  
    

</main><!-- End #main -->

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






  