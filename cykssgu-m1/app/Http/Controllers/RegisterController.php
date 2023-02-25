<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register() {
        return view('register');
    }

    public function store(request $request) {
        $this->validate($request,[
            'name'=>'required',
            'surname'=>'required',
            'patronymic'=>'required',
            'login'=>'required',
            'email'=>'required',
            'check'=>'required',
        ]);

        User::create([
            'name'=>'required',
            'surname'=>'required',
            'patronymic'=>'required',
            'login'=>'required',
            'email'=>'required',
            'password'=>Hash::make($request->password)
        ]);

       Auth::attempt($request->only('login','password'));
       return redirect()->route('home');
    }
}
