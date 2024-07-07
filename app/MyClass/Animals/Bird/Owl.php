<?php

namespace App\MyClass\Animals\Bird;

class OWl
{
    private $details = [
        'ciri-ciri' => 'bermata besar dan memiliki bulu yang memungkinkan kamuflase di malam hari',
        'bergerak' => 'terbang dengan sayap yang lebar dan tenang untuk memburu mangsa di malam hari',
        'reproduksi' => 'bertelur 3-4 butir di dalam sarang di pohon atau bangunan tua',
        'habitat' => 'hutan, padang rumput, dan daerah pedesaan',
        'makanan' => 'mamalia kecil, serangga, dan burung kecil',
        'predator' => 'beberapa spesies ular, elang, dan mamalia besar',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
