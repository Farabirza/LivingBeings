<?php

namespace App\MyClass\Animals\Mamalia;

class PoleBear
{
    private $details = [
        'ciri-ciri' => 'seekor mamalia besar dengan bulu putih tebal dan tubuh yang kuat untuk bertahan di lingkungan Arktik',
        'bergerak' => 'bergerak dengan berjalan atau berenang, menggunakan kaki yang kuat dan cakar yang besar',
        'reproduksi' => 'melahirkan satu atau dua anak setelah masa kehamilan sekitar 8 bulan, biasanya di sarang yang terbuat dari salju',
        'habitat' => 'daerah Arktik, termasuk laut es dan daratan dekat kutub utara',
        'makanan' => 'anjing laut, ikan, dan mamalia laut lainnya',
        'predator' => 'memiliki sedikit predator alami selain manusia, meskipun anak beruang kutub rentan terhadap serangan serigala atau beruang dewasa lainnya',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
