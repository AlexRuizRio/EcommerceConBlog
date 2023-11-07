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

    public function actualizarCarrito($productoId, $cantidad)
    {
        $this->carrito[$productoId]['cantidad'] = $cantidad;
        session()->put('carrito', $this->carrito);
    }

    public function render()
    {
        return view('livewire.carrito', [
            'carrito' => $this->carrito,
        ]);
    }
    public function confirmarEliminacion($productoId)
{
    $this->dispatchBrowserEvent('confirmarEliminacion', [
        'productoId' => $productoId,
    ]);
}
}
