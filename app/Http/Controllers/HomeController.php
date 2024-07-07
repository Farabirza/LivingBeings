<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->web_title = 'AniDex';
    }

    public function index()
    {
        return view('index', [
            'web_title' => $this->web_title
        ]);
    }
}
