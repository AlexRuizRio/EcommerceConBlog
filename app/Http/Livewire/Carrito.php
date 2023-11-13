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
    
        
            $carrito[$productoId]['cantidad'] = $nuevaCantidad;
            
            session()->put('carrito', $carrito);
            session()->save(); 
        
    }
    public function calcularPrecio()
    {
    $total = 0;

    foreach ($this->carrito as $productoId => $item) {
        $subtotal = $item['producto']['precio'] * $item['cantidad'];
        $total += $subtotal;
    }

    return $total;
    }

    public function calcularDescuento()
    {
    $totaldescuento = 0;

    foreach ($this->carrito as $productoId => $item) {
        $subtotal = ($item['producto']['precio'] * $item['producto']['descuento']/100) * $item['cantidad'];
        $totaldescuento += $subtotal;
    }

    return $totaldescuento;
    }

    public function calcularPrecioFinal()
    {
    $totalfinal = 0;

    foreach ($this->carrito as $productoId => $item) {
    
  
    $subtotal = ($item['producto']['precio']- ($item['producto']['precio'] * $item['producto']['descuento']/100))* $item['cantidad'];
        $totalfinal += $subtotal;
    }

    return $totalfinal;
    }
    
    public function render()
    {
        return view('livewire.carrito', [
            'carrito' => $this->carrito,
        ]);
    }

}
