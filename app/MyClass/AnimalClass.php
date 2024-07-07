<?php

namespace App\MyClass;

use Illuminate\Support\Arr;
use App\MyClass\Type\BirdType;
use App\MyClass\Type\MamaliaType;
use App\Logs;

class AnimalClass
{
    public function __construct()
    {
        $this->bird = new BirdType();
        $this->mamalia = new MamaliaType();
    }

    public function getDetail($type, $animal)
    {
		$logs = new Logs( Arr::last(explode("\\", get_class())).'Log' );
        $response = isset($this->$type) ? $this->$type->getDetail(strtolower($animal)) : 'Jenis hewan ini belum terdaftar';
        $logs->write(date('Y-m-d h:i:s'), $response);
        return $response;
    }
}
