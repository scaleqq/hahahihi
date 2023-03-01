<?php

namespace App\Http\Controllers;

use App\models\Groupp;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Group extends Controller
{
    public function GroupUs(){
      $a=DB::table('product')->get();
      return view('katalog', compact('a'));
    }
}