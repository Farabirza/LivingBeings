<?php

namespace App\MyClass\Animals\Mamalia;

class Elephant
{
    private $details = [
        'ciri-ciri' => 'seekor mamalia besar dengan tubuh yang sangat besar, belalai panjang, dan gading yang tumbuh dari mulutnya',
        'bergerak' => 'berjalan dengan perlahan tapi stabil, menggunakan keempat kakinya yang besar dan kuat',
        'reproduksi' => 'melahirkan satu anak setelah masa kehamilan sekitar 22 bulan, yang merupakan masa kehamilan terpanjang di antara mamalia darat',
        'habitat' => 'hutan, sabana, dan daerah berumput',
        'makanan' => 'tumbuhan, termasuk rumput, daun, buah, dan kulit kayu',
        'predator' => 'anak gajah rentan terhadap serangan singa atau buaya, tetapi gajah dewasa tidak memiliki banyak predator alami',
    ];

    public function getDetail()
    {
        return $this->details;
    }
}
