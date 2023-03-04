<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItem(Request $request)

    {
    
        $productId = $request->input('product_id');
    
        $quantity = $request->input('quantity');
    
        $product = Product::find($productId);
    
    
    
        if (!$product) {
    
            return redirect()->back()->withErrors('Product not found');
        }
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $productId => [
                    'product_id' => $productId,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product quantity updated successfully!');
        }
        $cart[$productId] = [
            'product_id' => $productId,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function showCart()
{
    $cart = session()->get('cart');
    return view('cart', compact('cart'));
}
public function removeItem($productId)
{
    $cart = session()->get('cart');
    if (isset($cart[$productId])) {
        unset($cart[$productId]);
        session()->put('cart', $cart);
    }
    return redirect()->back()->with('success', 'Product removed from cart successfully!');

}
}
