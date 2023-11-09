<div>
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
                                                     <img class="img-fluid mx-auto d-block image" src="{{ $item['producto']['img'] }}">
                                                </div>
                                                <div class="col-md-8">
                                                     <div class="info">
                                                          <div class="row">
                                                               <div class="col-md-5 product-name">  
                                                                    <div class="product-name">
                                                                         <a href="#">{{ $item['producto']['nombre'] }}</a>
                                                                         <div class="product-info">
                                                                              <div>Autor: <span class="value">{{ $item['producto']['autormarca'] }}</span></div>
                                                                              <div>Precio sin decuento: <span class="value">{{ $item['producto']['precio'] }}€</span></div>
                                                                              @if($item['producto']['descuento'] != 0)
                                                                              <div>Descuento: <span class="value">{{ $item['producto']['descuento'] }}%</span></div>
                                                                              @endif
                                                                         </div>
                                                                    </div>
                                                               </div>
                                                               <div class="col-md-4 quantity">
                                                                 <label for="quantity_{{ $productoId }}">Cantidad:</label>
                                                                 <input id="quantity_{{ $productoId }}" wire:model="carrito.{{ $productoId }}.cantidad" type="number" class="form-control quantity-input" wire:change="actualizarCantidad({{ $productoId }}, $event.target.value)">                                                          
                                                                 @if ($carrito[$productoId]['cantidad'] == 0)
                                                                     <form action="{{ route('eliminar.producto', ['productoId' => $productoId]) }}" method="POST">
                                                                         @csrf
                                                                         <button type="submit">Eliminar Producto</button>
                                                                     </form>
                                                                 @endif
                                                             </div>
                                                            <div class="col-md-3 price">
                                                                 <span>{{$item['producto']['precio']- ($item['producto']['precio'] * $item['producto']['descuento']/100)}}€</span>
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
                                      <h3></h3>
                                      <div class="summary-item"><span class="text">Precio</span><span class="price">€</span></div>
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
@livewireScripts

</div>
