<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function index()
    {
        return view('management.data.index');
    }

    public function create()
    {
        return view('management.data.create');
    }

    public function edit()
    {
        return view('management.data.edit');
    }
}
