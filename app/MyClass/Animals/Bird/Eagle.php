<?php

namespace App\MyClass\Animals\Bird;

class Eagle
{
    private $details = [
        'ciri-ciri' => 'seekor burung yang memiliki tubuh besar dengan lebar sayap yang bisa mencapai hingga 2 meter',
        'bergerak' => 'terbang menggunakan sayap besar dan kuat, sering kali meluncur di udara untuk menghemat energi',
        'reproduksi' => 'biasanya bertelur satu atau dua butir setiap musim kawin',
        'habitat' => 'pegunungan, hutan, padang rumput, hingga daerah pesisir',
        'makanan' => 'berbagai jenis hewan seperti mamalia kecil, burung lain, reptil, dan ikan',
        'predator' => 'memiliki sedikit predator alami karena posisi mereka sebagai pemangsa puncak',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
