<?php
namespace App\Http\Livewire;

use App\Cart as ShoppingCart;
use Livewire\Component;
class Cart extends Component
{
    public $cartItems;
    public $cartCount;
    public $cartTotal;

    protected $listeners = [
        'cartUpdated' => 'updated',
        'destroyCart' => 'destroy'
    ];

    public function mount()
    {
        $this->setCart();
    }

    public function incrementItem($rowId, $qty, ShoppingCart $cart)
    {
        $qty++;
        $cart->update($rowId, $qty);
    }

    public function decrementItem($rowId, $qty, ShoppingCart $cart)
    {
        $qty--;
        $cart->update($rowId, $qty);
        if($qty <= 0)
        {
            $this->emit('itemRemoved', $rowId);
        }
    }

    public function removeItem($rowId, ShoppingCart $cart)
    {
        $cart->remove($rowId);
        $this->emit('itemRemoved', $rowId);
    }

    public function destroy(ShoppingCart $cart)
    {
        $cart->destroy();
        $this->emit('cartDestroyed');
    }
    
    public function updated()
    {
        $this->setCart();
    }

    protected function setCart()
    {
        $this->cartItems = app('cart')->content();
        $this->cartCount = $this->cartItems->count();
        $this->cartTotal = app('cart')->subtotal();
        $this->emit('setTotalAmount', app('cart')->subtotal(false).'00');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
