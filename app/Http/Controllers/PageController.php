<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index()
    {
        return view('index', [
            'background' => 'images/index.jpg',
            'navbar' => 'navbar-index',
            'banner' => 'banner-index'
        ]);
    }

    public function news()
    {
        return view('news');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }
}
