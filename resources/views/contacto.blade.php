<x-layouts.app>


<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contacto</h1>
          <span>Siente libre de contactar para cualquier duda</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-information">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-phone"></i>
            <h4>Telefono</h4>
            <p>Nuestro horario telefonico es de 9:00 a 21:00</p>
            <a href="#">+034 666666666</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <h4>Email</h4>
            <p>Envianos un email para mas informacion</p>
            <a href="#">alejandro.ruizrio@gmail.com</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <h4>Localizacion</h4>
            <p>C, Federico Cantero Villamil, 2B, 28935 Móstoles, Madrid <br> España</p>
            <a href="https://maps.app.goo.gl/THruLj8KefM2Z3CC7">Vista en Google Maps</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="callback-form contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Envia un<em>mensaje</em></h2>
            <span>Responderemos en la mayor brevedad posible</span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="" method="get">
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
                    <button type="submit" id="form-submit" class="filled-button">Enviar mensaje</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="map">
<!-- How to change your own map point
  1. Go to Google Maps
  2. Click on your location point
  3. Click "Share" and choose "Embed map" tab
  4. Copy only URL and paste it within the src="" field below
-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878.3821388569709!2d-3.880797993423243!3d40.3408878962638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418e6bf3f2e8f3%3A0x9d1fd69b7b8335bd!2sVivero%20de%20empresas%20de%20M%C3%B3stoles!5e0!3m2!1ses!2ses!4v1700070166379!5m2!1ses!2ses" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    
  </div>

</x-layouts.app>