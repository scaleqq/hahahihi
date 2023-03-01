<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function baskets() {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}
