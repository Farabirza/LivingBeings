<?php

namespace App\MyClass\Animals\Mamalia;

class Lion
{
    private $details = [
        'ciri-ciri' => 'seekor mamalia besar dengan bulu cokelat keemasan dan jantan memiliki surai yang tebal di sekitar kepalanya',
        'bergerak' => 'bergerak dengan lincah, menggunakan keempat kakinya untuk berlari dan melompat',
        'reproduksi' => 'biasanya melahirkan 2-4 anak setelah masa kehamilan sekitar 3,5 bulan',
        'habitat' => 'sabana, padang rumput, dan hutan terbuka',
        'makanan' => 'mamalia besar seperti rusa, zebra, dan kerbau',
        'predator' => 'anak singa rentan terhadap serangan hyena atau buaya, tetapi singa dewasa tidak memiliki banyak predator alami',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
