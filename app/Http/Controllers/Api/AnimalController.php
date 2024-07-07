<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyClass\AnimalClass;

class AnimalController extends Controller
{
    public $detail;

    public function __construct()
    {
        $this->detail = new AnimalClass();
    }

    public function detail($type, $animal)
    {
        return $this->detail->getDetail(strtolower($type), strtolower($animal));
    }
}
