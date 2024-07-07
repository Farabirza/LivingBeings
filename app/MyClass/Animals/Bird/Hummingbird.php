<?php

namespace App\MyClass\Animals\Bird;

class Hummingbird
{
    private $details = [
        'ciri-ciri' => 'bertubuh kecil dengan warna bulu yang cerah dan kemampuan terbang di tempat',
        'bergerak' => 'terbang cepat dengan gerakan sayap yang sangat cepat, memungkinkan terbang di tempat',
        'reproduksi' => 'bertelur dua butir di sarang kecil yang terbuat dari serat tanaman dan sarang laba-laba',
        'habitat' => 'hutan hujan, taman bunga, dan daerah subtropis',
        'makanan' => 'nektar bunga dan serangga kecil',
        'predator' => 'ular, laba-laba besar, dan burung pemangsa lainnya',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
