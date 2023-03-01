<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\abouts;
use Illuminate\Support\Facades\DB;

class AboutUs extends Controller
{
    public function slider($id = "id", $sort = "desc") {
        $a = abouts::orderby($id, $sort) ->limit(5) -> get();
        return view('about', ['a' => $a]);
    }
}
