<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->web_title = 'AniDex';
    }

    public function index()
    {
        if(Auth::user()) {
            return view('home', [
                'web_title' => $this->web_title
            ]);
        }
        return view('index', [
            'web_title' => $this->web_title
        ]);
    }
}
