<?php

namespace App\MyClass\Animals\Bird;

class Pelicans
{
    private $details = [
        'ciri-ciri' => 'seekor burung air besar dengan kantong paruh yang digunakan untuk menangkap ikan',
        'bergerak' => 'terbang dalam formasi dan berenang dengan menggunakan kakinya yang berselaput',
        'reproduksi' => 'bertelur 1-3 butir di sarang yang dibuat di tanah atau di pepohonan',
        'habitat' => 'danau, rawa, dan pesisir pantai',
        'makanan' => 'ikan, amfibi, dan terkadang burung kecil',
        'predator' => 'ikan hiu, buaya, dan beberapa spesies burung pemangsa',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
