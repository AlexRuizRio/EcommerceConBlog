<x-layouts.app>


<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>{{$articulo['titulo']}}</h1>
          <span><i class="fa fa-user"></i> {{$articulo['autor']['nombre']}} {{$articulo['autor']['apellidos']}} &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{$articulo['fecha_publicacion']}}</span>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info about-info">
    <div class="container">
      <div class="more-info-content">
        <div class="right-content">
          <div>
            <img src="{{$articulo['img']}}" class="img-fluid" alt="">
          </div>
          <br>
          {{$articulo['contenido']}}
        </div>
      </div>
    </div>
  </div>

  <div class="callback-form contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Deja un <em>comentario</em></h2>
            <span></span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nick" required="">
                  </fieldset>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensaje" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Comentar</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</x-layouts.app>