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
        <div>
         @livewire('carrito', ['carrito' => $carrito]) 
        
        </div>
      
</x-layouts.app>