<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class catalog1 extends Controller
{
    public function show() {
        $a = DB::table('catalog')
        ->select('id','img','kategoria','name','price','kol')
        ->orderby('name', 'desc')
        ->get('id','name','price','kol');
        $a == "0";
        return view('catalog', ['a' => $a]);
    }

    public function sortirov($name, $asc){
        $a = DB::table('catalog')
        ->select('img','kategoria','name','price','kol','id')
        ->where("id",">",0)
        ->orderby($name, $asc)
        ->get('img','kategoria','name','price','kol','id');
        $a == "0";
        return view('catalog', ['a' => $a]);
    }
}
