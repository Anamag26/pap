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
            <h2>SISTEMA INTRASTAT</h2>
            <ol>
                <li>INICIO</li>
                <li>SISTEMA INTRASTAT</li>
            </ol>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <form  role="form" class="php-email-form2">
        <div class="container">
            <p>
                <b><h2> SISTEMA INTRASTAT</h2></b> 
            </p>
            <div class="mec-single-event-description mec-events-content">
                <p>Envio ao Instituto Nacional de Estatística dos Formulários de Chegada e/ou Expedição, contendo a informação estatística sobre as transações de mercadorias efetuadas com outros Estados-membros da União Europeia referente ao mês anterior, ou da respetiva declaração de ausência, se não existir comércio intracomunitário em qualquer dos fluxos (chegada e/ou expedição).</p>
            </div>
             
        </div>

        <div class="container">
            <div class="row row-cols-8">
                <div class="col">
                    <div class="text-center">
                        <button type="submit"  href="#" > + Adicionar ao Google Calendar</button>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <button type="submit" href="#" > + ICal export</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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