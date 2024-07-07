<?php

namespace App\MyClass\Animals\Bird;

class Dove
{
    private $details = [
        'ciri-ciri' => 'memiliki tubuh sedang dengan bulu berwarna abu-abu dan putih',
        'bergerak' => 'terbang dengan sayap yang kuat dan sering terlihat berkelompok',
        'reproduksi' => 'bertelur dua butir setiap musim kawin, dan sering membuat sarang di gedung atau pepohonan',
        'habitat' => 'perkotaan, taman, dan daerah pedesaan',
        'makanan' => 'biji-bijian, buah-buahan, dan sisa makanan manusia',
        'predator' => 'kucing, elang, dan hewan pemangsa lainnya',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
