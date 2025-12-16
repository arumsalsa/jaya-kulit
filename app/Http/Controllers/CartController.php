<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty']++;
        } else {
            $cart[$product->id] = [
                'name'  => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'qty'   => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect('/cart')->with('success', 'Produk ditambahkan ke keranjang');
    }

    public function index()
    {
        $cart = session('cart', []);
        return view('user.cart', compact('cart'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return back();
    }
}
