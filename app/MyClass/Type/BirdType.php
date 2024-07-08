<?php

namespace App\MyClass\Type;

use App\MyClass\Animals\Bird\Eagle;
use App\MyClass\Animals\Bird\Dove;
use App\MyClass\Animals\Bird\Owl;
use App\MyClass\Animals\Bird\Hummingbird;
use App\MyClass\Animals\Bird\Pelicans;

class BirdType
{
    private $animals = ['eagle', 'dove', 'owl', 'hummingbird', 'pelicans'];

    public function __construct()
    {
        $this->eagle = new Eagle();
        $this->dove = new Dove();
        $this->owl = new Owl();
        $this->hummingbird = new Hummingbird();
        $this->pelicans = new Pelicans();
    }

    public function getAnimals()
    {
        $array = [];
        foreach($this->animals as $key => $animal) {
            $detail = $this->$animal->getDetail();
            $description = '['.strtoupper($animal).'] Ciri-ciri burung ini adalah '.$detail['ciri-ciri'].'. Burung ini '.$detail['bergerak'].'. Burung ini biasa hidup di '.$detail['habitat'].'. Makanan dari burung jenis ini adalah '.$detail['makanan'].'. Untuk berkembangbiak, burung ini '.$detail['reproduksi'];
            $array[$key] = $description;
        }
        return $array;
    }

    public function getDetail($animal)
    {
        if(isset($this->$animal)) {
            $detail = $this->$animal->getDetail();
            $description = '['.strtoupper($animal).'] Ciri-ciri burung ini adalah '.$detail['ciri-ciri'].'. Burung ini '.$detail['bergerak'].'. Burung ini biasa hidup di '.$detail['habitat'].'. Makanan dari burung jenis ini adalah '.$detail['makanan'].'. Untuk berkembangbiak, burung ini '.$detail['reproduksi'];
        } else {
            $description = 'Data hewan ini belum terdaftar';
        }
        return response()->json([
            $description
        ], 200);
    }
}
