<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project extends Controller
{
    public function home(){
        return view('home');

    }

    public function blog(){
        $data = 'abc';

        return view('blog', compact('data'));

    }

    public function contact(){
        return view('contac');

    }

    public function protfolio(){
        return view('protfolio');

    }
    public function service(){
        return view('service');

    }
}
