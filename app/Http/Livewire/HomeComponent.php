<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use Cart;

class HomeComponent extends Component
{
    public $category_id;
    public function store($product_id,$product_nama,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_nama,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $slides = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $fproducts = Product::where('featured',1)->inRandomOrder()->get()->take(8);
        $pcategories = Category::where('is_popular',1)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component',['slides'=>$slides,'lproducts'=>$lproducts,'fproducts'=>$fproducts ,'pcategories'=>$pcategories,'categories'=>$categories]);
    }
}
