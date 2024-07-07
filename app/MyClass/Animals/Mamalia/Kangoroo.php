<?php

namespace App\MyClass\Animals\Mamalia;

class Kangoroo
{
    private $details = [
        'ciri-ciri' => 'seekor mamalia dengan tubuh yang kuat, kaki belakang yang besar, dan ekor yang kuat untuk keseimbangan',
        'bergerak' => 'bergerak dengan melompat menggunakan kaki belakangnya yang besar dan kuat',
        'reproduksi' => 'melahirkan satu anak setelah masa kehamilan sekitar 1 bulan, dan anak tersebut akan tinggal di kantong induknya selama beberapa bulan',
        'habitat' => 'padang rumput, hutan terbuka, dan semak belukar di Australia',
        'makanan' => 'rumput dan daun, serta tanaman lain',
        'predator' => 'anak kanguru rentan terhadap serangan elang dan dingo',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
