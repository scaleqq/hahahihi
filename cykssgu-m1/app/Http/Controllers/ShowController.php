<?php

namespace App\Http\Controllers;

use App\Models\show;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function shows($id = "id", $sort = "desc")
    {
        $a = show::orderby($id, $sort)->get();
        return view('katalog', ['a' => $a]);
    }

    public function slider($id = "id", $sort = "desc")
    {
        $a = show::orderby($id, $sort)->limit(5)->get();
        return view('about', ['a' => $a]);
    }
}
