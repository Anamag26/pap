@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

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

     <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title">
                      <h2>{{ __('Confirm Password') }}</h2> 
                    </div>

                    <div class="card-body">
                        {{ __('Please confirm your password before continuing.') }}

                     <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                      

                                    
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
           
                </div>
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






  

