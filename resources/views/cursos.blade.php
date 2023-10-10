<x-layouts.app>

    <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Cursos</h1>
              <span>Los mejores cursos para aprender a programar</span>
            </div>
          </div>
        </div>
      </div>

      <div class="services">
        <div class="container">
          <div class="row">

            @foreach($productos as $producto)
            @if($producto->tipo == 'curso')
            <div class="col-md-4">
                <a href="{{ route('detalleproducto', ['nombre' => $producto->nombre]) }}" style="text-decoration: none; color: inherit;">
                    <div class="service-item">
                        <img src="{{ $producto->img }}" alt="imagen del producto" class="product-image">
                        <div class="down-content">
                            <h4>{{ $producto->nombre }}</h4>
                            <div style="margin-bottom:10px;">
                                <span> <del>{{$producto->precio}}€</del> {{$producto->precio - ($producto->precio * $producto->descuento / 100)}}€ </span>
                            </div>
                            <p>{{$producto->descripcion }}</p>
                            <form action="{{ route('carrito.agregar') }}" method="post">
                              @csrf <!-- Token CSRF para protección -->
                              <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                              <button type="submit" class="filled-button custom-button" >Agregar al Carrito</button>
                          </form>
                        </div>
                    </div>
                </a>
                <br>
            </div>
            @endif
        @endforeach
        
    </div>

    <br>
    <br>

    <nav>
      <ul class="pagination pagination-lg justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>

    <br>
    <br>
    <br>
    <br>
  </div>
</div>


</x-layouts.app>