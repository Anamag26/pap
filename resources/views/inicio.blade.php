@extends('layouts.base')
@section('content')

    <!-- ======= Hero Section ======= -->
  <section id="hero">
    
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
     
        <div class="carousel-inner" role="listbox">

          
      
          
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('mamba/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">

                <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                <h2 class="animate__animated animate__fadeInDown">Bem vindo ao <span>JBContab</span></h2>
                <p class="animate__animated animate__fadeInUp">40 anos de experiência na prestação de serviços de qualidade nas áreas de contabilidade, fiscalidade e recursos Humanos.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto ">Ler mais</a>
              
              </div>
              
              </div>
            </div>
          </div>

          

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('mamba/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Deixe os números connosco</h2>
                <p class="animate__animated animate__fadeInUp">Faça um pedido de serviço.</p>
                <a href="{{route('pedidos.create')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Fazer Pedido</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('mamba/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Seja nosso parceiro de negócios</h2>
                <p class="animate__animated animate__fadeInUp">O nosso foco é ajudar os nossos clientes a construir a organização de amanhã</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler mais</a>
              </div>
            </div>
          </div>

        

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="mamba/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2 style="color:#5E8A75">Sobre Nós</h2>
              <p> JBContab promove relacionamentos duradouros com os seus clientes mantendo-se permanentemente atento ao seu objectivo de promover a melhoria continua nos serviços de contabilidade, fiscalidade e recursos humanos.</p>
            </div>

            <div style="color:#5E8A75" class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-check"></i></div>
              <h4 class="title"><a href="">Cumprimento de prazos e organização</a></h4>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-businessman"></i></div>
              <h4 class="title"><a href="">Seriedade</a></h4>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-speech-comments"></i></div>
              <h4 class="title"><a href="">Honestidade</a></h4>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section id="calendario"class="about-lists">

      <div class="section-title  justify-content-center">
        <h2 style="color:#5E8A75">Calendario Fiscal</h2>
      </div>
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span >01 ABR</span>
            <h4> <a style="color:#5E8A75" href="/irs">INÍCIO ENTREGA DA MODELO 3 DO IRS</a> </h4>
           
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>12 ABR</span>
            <h4><a style="color:#5E8A75" href="/segurancasocial">SEGURANÇA SOCIAL</a></h4>
            
            
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>12 ABR</span>
            <h4> <a style="color:#5E8A75" href="/irs–dmr">IRS – DMR</a></h4>           
            
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>12 ABR</span>
            <h4> <a style="color:#5E8A75" href="/faturas">COMUNICAÇÃO DOS ELEMENTOS DAS FATURAS</a></h4>
            
            
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>15 ABR</span>
            <h4> <a style="color:#5E8A75" href="/intrastat">SISTEMA INTRASTAT</a></h4>
            
            
          </div>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>15 ABR</span>
            <h4> <a style="color:#5E8A75" href="/modelo11">MODELO 11</a></h4>
            
            
          </div>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>15 ABR</span>
            <h4><a style="color:#5E8A75" href="/ces">CES</a></h4>
            
            
          </div>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>15 ABR</span>
            <h4><a style="color:#5E8A75" href="/iva">IVA</a></h4>
            
            
          </div>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>20 ABR</span>
            <h4> <a style="color:#5E8A75" href="/fct">FCT E FGCT</a></h4>
            
            
          </div>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>20 ABR</span>
            <h4><a style="color:#5E8A75" href="/cga">COMUNICAÇÃO À CGA,I</a></h4>
            
            
          </div>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>20 ABR</span>
            <h4> <a style="color:#5E8A75" href="/segurancasocial">SEGURANÇA SOCIAL</a></h4>
            
            
          </div>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>20 ABR</span>
            <h4><a style="color:#5E8A75" href="/iva">IVA</a></h4>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section -->

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Serviços</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-chart-growth"></i></div>
            <h4 class="title"><a >CONTABILIDADE GERAL E ANALÍTICA (IRS, IRC e IVA)</a></h4>
            <p class="description">O Centro de Contabilidade JBContab transforma a contabilidade numa ferramenta fundamental no apoio à gestão oferecendo um conjunto de vantagens competitivas que contribuem para a simplificação do trabalho do gestor e potenciam a qualidade da gestão.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a >AUDITORIA</a></h4>
            <p class="description">Com base na contabilidade, o seu contabilista discute consigo, em reuniões presenciais, os resultados da sua empresa bem como os planos de acção que orientam a sua empresa para o sucesso.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-dollar"></i></div>
            <h4 class="title"><a >CONSULTORIA FISCAL</a></h4>
            <p class="description">No Centro de Contabilidade JBContab o seu contabilista responsabiliza-se pelo planeamento mensal dos seus impostos, tendo por base uma contabilidade sempre actualizada e reconciliada, com o objectivo de alcançar a maior eficácia fiscal da sua empresa.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-people"></i></div>
            <h4 class="title"><a >APOIO NA ORGANIZAÇÃO DE EMPRESAS</a></h4>
            <p class="description">No Centro de Contabilidade JBContab olhamos para as empresas como nossos verdadeiros parceiros e apoiamos as mesmas de forma a melhorarem os seus processos internos.</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a >GESTÃO DE RECURSOS HUMANOS</a></h4>
            <p class="description">O Centro de Contabilidade JBContab responde a todas as obrigações laborais a que a sua empresa está sujeita, nomeadamente o processamento de salários e o envio de declarações de remunerações.</p>
          </div>
          

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contactos</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Nossa Morada</h3>
              <p>Santarem,Benavente</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>jfbgoncalves@gmail.com<br></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Telefone</h3>
              <p>+351 913 525 058<br></p>
            </div>
          </div>

          

        </div>
           
      </div>
    </section><!-- End Contact Us Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Perguntas Frequentes</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>A quem se destina?</h4>
            <p>
              Este serviço destina-se a empresários em nome individual enquadrados no regime simplificado ou contabilidade organizada em sede de IRS, bem como micro e pequenas empresas, na forma jurídica, sociedades unipessoais por quotas, sociedades por quotas ou sociedades anónimas.
    Também se destina a associações, cooperativas e IPSS.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Já tenho contabilista, como devo proceder?</h4>
            <p>
              Pode mudar sem qualquer problema. Para quem tem a chamada contabilidade no regime organizado, com Contabilista Certificado, existem procedimentos relacionados com o Código Deontológico da Ordem dos Contabilistas que devem ser respeitados, mas nós tratamos de tudo o que é necessário, não tem que se preocupar.</p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Vou precisar de me deslocar às vossas instalações?</h4>
            <p>
              Não. A JBContab é um serviço totalmente Online de um gabinete de contabilidade, onde todo o processo decorre de uma forma em que não é necessária a deslocação de pessoas ou documentos, assim, o cliente poupa tempo e recursos e tem o serviço sempre assegurado.</p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Este tipo de serviço de contabilidade é permitido por lei?</h4>
            <p>
              Sim, todo o processo de prestação de serviços cumpre integralmente todas as normas da legislação portuguesa em vigor.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
 @include('formulario.create')
  
@endsection