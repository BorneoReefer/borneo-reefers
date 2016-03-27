<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('management.news.index');
    }

    public function create()
    {
        return view('management.news.create');
    }

    public function edit()
    {
        return view('management.news.edit');
    }
}
