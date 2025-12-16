<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('user.home');
    }

    public function about() {
        return view('user.about');
    }

    public function products() {
        return view('user.products');
    }

    public function contact() {
        return view('user.contact');
    }
}
