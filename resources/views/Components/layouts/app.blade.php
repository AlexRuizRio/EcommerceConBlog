<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Mobile Store Website Template</title>

    <!-- Bootstrap core CSS -->
    

    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="kinetic">
            <div></div>
            <div></div>
            
        </div>
    </div>  
  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('/') }}"><h2><em> Tienda de </em> Programacion</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
        
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('curso') }}"><strong>Cursos</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('plantilla') }}"><strong>Plantillas</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ebook') }}"><strong>Ebook</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blogmostrar') }}"><strong>Blog</strong></a>
              </li>
              <li class="nav-item account-item">
                <a class="nav-link" href="login.html">
                  <i class="fa fa-user" style="font-size:24px"></i>
                </a>
              </li>
              <li class="account-item nav-item">
                <a class="nav-link" href="{{ route('carritomostrar') }}">
                  <i class="fa fa-shopping-cart" style="font-size:24px"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- AQUI TIENE QUE IR EL CONTENIDO DE LA PAGINA -->
        {{ $slot }}

      <x-layouts.footer />

     <!-- Bootstrap core JavaScript  -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

     
    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
  

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>