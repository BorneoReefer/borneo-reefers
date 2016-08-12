<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\News;
use App\Models\FAQ;

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
        return view('news', [
            'news' => News::orderBy('created_at', 'des')->paginate(4)
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq', [
            'faq' => FAQ::all()
        ]);
    }
}
