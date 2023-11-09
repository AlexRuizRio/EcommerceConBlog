<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Carrito extends Component
{
    public $carrito = [];

    protected $listeners = ['actualizarCarrito' => 'actualizarCarrito'];

    public function mount()
    {
        $this->carrito = session()->get('carrito', []);
        
    }

    public function actualizarCantidad($productoId, $nuevaCantidad)
    {
        
        $carrito = session()->get('carrito', []);
    
        if ($nuevaCantidad == 0) {
            $this->confirmarEliminacion($productoId);
            
        } else {
            $carrito[$productoId]['cantidad'] = $nuevaCantidad;
            
            session()->put('carrito', $carrito);
            session()->save(); 
        }
    }
    
    public function confirmarEliminacion($productoId)
    {
        
        $this->dispatchBrowserEvent('confirmarEliminacion', ['productoId' => $productoId]);
        //dd('El producto con el ID ' . $productoId . ' será eliminado.');
    }
    
    public function eliminarProducto($productoId)
    {
       

        $carrito = session()->get('carrito', []);
    
        if (isset($carrito[$productoId])) {
            unset($carrito[$productoId]);
            session()->put('carrito', $carrito);
            session()->save(); 
        }
    
       
    }
    public function render()
    {
        return view('livewire.carrito', [
            'carrito' => $this->carrito,
        ]);
    }

}
