<?php

namespace App\MyClass\Animals\Mamalia;

class Tiger
{
    private $details = [
        'ciri-ciri' => 'seekor mamalia besar dengan bulu oranye dan garis-garis hitam, serta tubuh yang kuat dan otot yang berkembang',
        'bergerak' => 'bergerak dengan lincah dan cepat, menggunakan keempat kakinya untuk berlari dan melompat',
        'reproduksi' => 'biasanya melahirkan 2-4 anak setelah masa kehamilan sekitar 3,5 bulan',
        'habitat' => 'hutan tropis, sabana, dan lahan basah',
        'makanan' => 'mamalia besar seperti rusa, babi hutan, dan hewan lainnya',
        'predator' => 'memiliki sedikit predator alami selain manusia',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
