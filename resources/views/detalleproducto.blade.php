<x-layouts.app>

    <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1><small><del>{{$producto->precio}}€ </del></small> &nbsp; {{$producto->precio - ($producto->precio * $producto->descuento / 100)}}€</h1>
              <span>
                <h4>{{ $producto->nombre }}</h4>
              </span>
            </div>
          </div>
        </div>
      </div>
  
      <div class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div>
                <img src="{{ $producto->img }}" alt="" class="img-fluid wc-image">
              </div>
  
              <br>
  
              <div class="row">
                <div class="col-sm-4 col-6">
                  <div>
                    <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">
                  </div>
                  <br>
                </div>
                <div class="col-sm-4 col-6">
                  <div>
                    <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">
                  </div>
                  <br>
                </div>
                <div class="col-sm-4 col-6">
                  <div>
                    <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">
                  </div>
                  <br>
                </div>
              </div>
  
              <br>
            </div>
  
            <div class="col-md-5">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h4>Informacion</h4>
                </div>
  
                <div class="content">
                  <p>{{$producto->descripcion }}</p>
                </div>
              </div>
  
              <br>
  
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="">Cantidad</label>
                      <input type="text" value="1" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <a href="#"class="filled-button">Añadir al carro</a>
                      <a href="#"class="filled-button">Comprar</a>
                    </div>
                  </div>
                </div>
              </form>
  
              <br>
            </div>
          </div>
  
          <br>
  
          <div> {!! $producto->descripcionextensa !!} </div>
  
          <br>
          <br>
          <br>
        </div>
      </div>


 
</x-layouts.app>