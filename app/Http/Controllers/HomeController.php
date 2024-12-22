<?php

namespace App\Http\Controllers;


class HomeController extends Controller{
    public function home()
    {
        // Return view untuk halaman home
        return view('home');
    }
}