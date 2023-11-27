<x-layouts.app>
    

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>lorem ipsum dolor sit amet!</h6>
                  <h4>Quam temporibus accusam <br> hic ducimus quia</h4>
                  <p>Magni deserunt dolorem consectetur adipisicing elit. Corporis molestiae optio, laudantium odio quod rerum maiores, omnis unde quae illo.</p>
                  <a href="products.html" class="filled-buttonblack">Products</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>magni deserunt dolorem harum quas!</h6>
                  <h4>Aliquam iusto harum <br>  ratione porro odio</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cupiditate mollitia adipisci assumenda laborum eius quae quo excepturi, eveniet. Dicta nulla ea beatae consequuntur?</p>
                  <a href="about.html" class="filled-buttonblack">About Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>alias officia qui quae vitae natus!</h6>
                  <h4>Lorem ipsum dolor <br>sit amet, consectetur.</h4>
                  <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate mi. Sed nec cursus augue. Phasellus lacinia ac sapien vitae dapibus. Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</p>
                  <a href="contact.html" class="filled-buttonblack">Contact Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->
    <<!--
    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Quieres mas informacion de nuestros productos? </h4>
            <span>No dudes en contactar con nosotros </span>
          </div>
          <div class="col-md-4">
            <a href="" class="border-button">Contact Us</a>
            
          </div>
        </div>
      </div>
    </div>
  -->>
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Cursos <em>Destacados</em></h2>
              <span>Aprovecha los cursos con los mejores descuentos </span>
            </div>
          </div>
          @foreach($productosbaratos as $productobarato)
          <div class="col-md-4">
            <div class="service-item">
                <img src="{{ $productobarato['img'] }}" alt="imagen del producto" class="product-image">
                <div class="down-content">
                    <h4>{{ $productobarato['nombre'] }}</h4>
                    <div style="margin-bottom:10px;">
                        <span> <del>{{$productobarato['precio']}}€</del> {{$productobarato['precio']-($productobarato['precio']*$productobarato['descuento']/100)}}€ </span>
                    </div>
                    <p>{{$productobarato['descripcion']}}</p>
                    <div style="display: flex;">
                        <div style="margin-right: 10px;">
                            <a href="{{ route('detalleproducto', ['nombre' => $productobarato['nombre']]) }}" class="filled-button">Detalles</a>
                        </div>
                        <div>
                          <form action="{{ route('carrito.agregar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{ $productobarato['id'] }}">
                            <input type="hidden" name="accion" value="comprar">
                            <button type="submit" class="filled-button">Comprar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        @endforeach  
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Quienes somos</span>
                <h2>Conozca <em>nuestra empresa</em></h2>
                <p>Somos una empresa donde llevamos mas de 10 años trabajando de consultores dando servicios a grandes empresas y ahora tenemos cursos con los que...</p>
                <a href="about.html" class="filled-button">Leer mas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="section-heading">
          <h2>Lea nuestro <em>Blog</em></h2>
          <span>Muchos temas interesantes sobre cualquier tecnologia</span>
        </div>

        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              @foreach($articulosRecientes as $articulo)
              <li><a href='#tabs-{{$articulo['id']}}'>{{$articulo['titulo']}} <br> <small>{{$articulo['autor']['nombre']}} {{$articulo['autor']['apellidos']}} &nbsp;|&nbsp; {{$articulo['fecha_publicacion']}}</small></a></li>
             @endforeach
            </ul>

            <br>

            <div class="text-center">
              <a href="{{ route('blogmostrar') }}" class="filled-button">Leer mas </a>
            </div>

            <br>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              @foreach($articulosRecientes as $articulo)
              <article id='tabs-{{$articulo['id']}}'>
                <img src="{{$articulo['img']}}" alt="">
                <h4><a href="{{ route('blogdetalle', ['nombre' => $articulo['titulo']]) }}">{{$articulo['titulo']}}</a></h4>
                <p>{{ \Illuminate\Support\Str::limit($articulo['contenido'], 200) }}</p>
              </article>
              @endforeach
            </section>
          </div>
        </div>

        
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>Etiam suscipit ante a odio consequat</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
</x-layouts.app>