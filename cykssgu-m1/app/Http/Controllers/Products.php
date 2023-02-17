<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Products extends Controller
{
    public function product(){
        $cardprod = Product::all();
        return view('catalog',['a'=>$cardprod]);
    }
}
