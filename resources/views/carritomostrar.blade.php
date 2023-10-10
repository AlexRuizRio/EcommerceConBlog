<x-layouts.app>
     <div class="page-heading header-text">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Carrito</h1>
                <span>Los mejores cursos para aprender a programar</span>
              </div>
            </div>
          </div>
        </div>
        <main class="page">
          <section class="shopping-cart dark">
               <div class="container">
                    <br> 
                 <div class="content">
                    
                         <div class="row">
                              <div class="col-md-12 col-lg-8">
                                   @if(count($carrito) > 0)
                                   @foreach ($carrito as $productoId => $item)
                                   <div class="items">
                                        <div class="product">
                                             <div class="row">
                                                  <div class="col-md-3">
                                                       <img class="img-fluid mx-auto d-block image" src="{{ $item['producto']->img }}">
                                                  </div>
                                                  <div class="col-md-8">
                                                       <div class="info">
                                                            <div class="row">
                                                                 <div class="col-md-5 product-name">  
                                                                      <div class="product-name">
                                                                           <a href="#">{{ $item['producto']->nombre }}</a>
                                                                           <div class="product-info">
                                                                                <div>Autor: <span class="value">{{ $item['producto']->autormarca }}</span></div>
                                                                                <div>Precio: <span class="value">{{ $item['producto']->precio }}</span></div>
                                                                                <div>Memory: <span class="value">32GB</span></div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-4 quantity">
                                                                      <label for="quantity">Cantidad:</label>
                                                                      <input id="quantity" type="number" value ="{{ $item['cantidad'] }}" class="form-control quantity-input">
                                                                 </div>
                                                                 <div class="col-md-3 price">
                                                                      <span>{{$item['producto']->precio- ($item['producto']->precio * $item['producto']->descuento/100)}}€</span>
                                                                 </div>
                                                                
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>                     
                                   </div>
                                   @endforeach
                              </div>
                              <div class="col-md-12 col-lg-4">
                                   <div class="summary">
                                        <h3>Summary</h3>
                                        <div class="summary-item"><span class="text">Preci</span><span class="price">$360</span></div>
                                        <div class="summary-item"><span class="text">Descuento</span><span class="price">$0</span></div>
                                        <div class="summary-item"><span class="text">Envio</span><span class="price">$0</span></div>
                                        <div class="summary-item"><span class="text">Total</span><span class="price">$360</span></div>
                                        <button type="button" class="btn btn-primary btn-lg btn-block custom-button">Realizar pedido</button>
                                   </div>
                              </div>
                         </div> 
                    </div>
               </div>
         </section>
    </main>
@else
        <br>
        <h3 class="text-center">El carrito está vacío</h3>
        <br>
        
     </div> 
</div>
</div>
</section>
</main>
@endif
   
</x-layouts.app>