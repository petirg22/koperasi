<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //membuat controller baru
    public function index()
    {
        $data= [
            'nama' => 'Doraemon', 'pekerjaan' => 'Programmer'
        ];
        return view('home')->with($data);
    }

    public function contact()
    {
        return view('contact');
    }
}
