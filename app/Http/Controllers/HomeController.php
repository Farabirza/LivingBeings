<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()) {
            return view('home', [
                'animals' => Animal::paginate(9),
                'web_title' => $this->web_title
            ]);
        }
        return view('index', [
            'web_title' => $this->web_title
        ]);
    }
}
