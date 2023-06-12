<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => "Halaman Home",
            'link' => 'https://laravel.com/docs/8.x',
            'image_hero' => 'https://laravel.com/img/logomark.min.svg'
        ]);
    }
}
