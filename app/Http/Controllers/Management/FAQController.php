<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    public function index()
    {
        return view('management.faq.index');
    }

    public function create()
    {
        return view('management.faq.create');
    }

    public function edit()
    {
        return view('management.faq.edit');
    }
}
