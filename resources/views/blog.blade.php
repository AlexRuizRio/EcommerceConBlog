<x-layouts.app>
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog</h1>
        </div>
      </div>
    </div>
  </div>

<div class="single-services">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <section class='tabs-content'>
            @foreach($articulosArray as $articulo)
            <article id='tabs-1'>
              <img src="{{$articulo['img']}}" alt="">
              <h4><a href="blog-details.html">{{$articulo['titulo']}}</a></h4>
              <div style="margin-bottom:10px;">
                <span>{{$articulo['autor']['nombre']}} {{$articulo['autor']['apellidos']}}&nbsp;|&nbsp; {{$articulo['fecha_publicacion']}}&nbsp;|&nbsp; 0 comentarios</span>
              </div>
              <p>{{ \Illuminate\Support\Str::limit($articulo['contenido'], 200) }}</p>
              <br>
              <div>
                <a href="{{ route('blogdetalle', ['nombre' => $articulo['titulo']]) }}" class="filled-button">Continuar leyendo</a>
              </div>
            </article>

            <br>
            <br>
            <br>
            @endforeach
        </div>

        <div class="col-md-4">
            <h4 class="h4">Buscar</h4>
            
            <form id="search_form" name="gs" method="GET" action="#">
              <input type="text" name="q" class="form-control form-control-lg" placeholder="" autocomplete="on">
            </form>

            <br>
            <br>

            <h4 class="h4">Post recientes</h4>
            
            <ul>
              @foreach($articuloRecArray as $articuloRec)
                <li>
                    <h5 style="margin-bottom:10px;"><a href="blog-details.html">{{$articuloRec['titulo']}}</a></h5>
                    <small><i class="fa fa-user"></i> {{$articuloRec['autor']['nombre']}} {{$articuloRec['autor']['apellidos']}}&nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{$articuloRec['fecha_publicacion']}}</small>
                </li>

                <li><br></li>
               @endforeach   
            </ul>
        </div>
      </div>
    </div>
  </div>

  <br>  
  <br>  
  <br>  
  <br>  

</x-layouts.app>