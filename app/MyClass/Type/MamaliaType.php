<?php

namespace App\MyClass\Type;

use App\MyClass\Animals\Mamalia\Tiger;
use App\MyClass\Animals\Mamalia\Lion;
use App\MyClass\Animals\Mamalia\Elephant;
use App\MyClass\Animals\Mamalia\Kangoroo;
use App\MyClass\Animals\Mamalia\PoleBear;

class MamaliaType
{
    public function __construct()
    {
        $this->tiger = new Tiger();
        $this->lion = new Lion();
        $this->elephant = new Elephant();
        $this->kangoroo = new Kangoroo();
        $this->polebear = new PoleBear();
    }

    public function getDetail($animal)
    {
        if(isset($this->$animal)) {
            $detail = $this->$animal->getDetail();
            $description = '['.strtoupper($animal).'] Ciri-ciri hewan ini adalah '.$detail['ciri-ciri'].'. Hewan ini '.$detail['bergerak'].'. Hewan ini biasa hidup di '.$detail['habitat'].'. Makanan dari hewan jenis ini adalah '.$detail['makanan'].'. Untuk berkembangbiak, hewan ini '.$detail['reproduksi'];
        } else {
            $description = 'Data hewan ini belum terdaftar';
        }
        return response()->json([
            $description
        ], 200);
    }
}
