<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    private $animals = [
        [
            'name' => 'Eagle',
            'type' => 'bird',
            'characteristics' => 'seekor burung yang memiliki tubuh besar dengan lebar sayap yang bisa mencapai hingga 2 meter',
            'movement' => 'terbang menggunakan sayap besar dan kuat, sering kali meluncur di udara untuk menghemat energi',
            'reproduction' => 'biasanya bertelur satu atau dua butir setiap musim kawin',
            'habitat' => 'pegunungan, hutan, padang rumput, hingga daerah pesisir',
            'food' => 'berbagai jenis hewan seperti mamalia kecil, burung lain, reptil, dan ikan',
            'predator' => 'memiliki sedikit predator alami karena posisi mereka sebagai pemangsa puncak'
        ],
        [
            'name' => 'Falcon',
            'type' => 'bird',
            'characteristics' => 'seekor burung pemangsa yang memiliki tubuh kecil hingga sedang, dikenal karena kecepatannya',
            'movement' => 'terbang dengan cepat dan lincah, mampu melakukan manuver tajam',
            'reproduction' => 'bertelur tiga hingga empat butir setiap musim kawin',
            'habitat' => 'padang rumput, pegunungan, hutan terbuka, dan daerah pesisir',
            'food' => 'berburu burung lain, mamalia kecil, dan serangga',
            'predator' => 'memiliki sedikit predator alami, ancaman utama adalah aktivitas manusia'
        ],
        [
            'name' => 'Owl',
            'type' => 'bird',
            'characteristics' => 'burung nokturnal dengan kemampuan melihat dalam gelap, memiliki kepala besar dan mata besar',
            'movement' => 'terbang dengan tenang dan hampir tanpa suara untuk menangkap mangsa',
            'reproduction' => 'bertelur dua hingga lima butir setiap musim kawin',
            'habitat' => 'hutan, padang rumput, dan daerah perkotaan',
            'food' => 'mamalia kecil, burung lain, serangga, dan kadal',
            'predator' => 'anak burung hantu dapat dimangsa oleh mamalia besar dan burung pemangsa lainnya'
        ],
        [
            'name' => 'Parrot',
            'type' => 'bird',
            'characteristics' => 'burung dengan bulu berwarna-warni, memiliki paruh kuat dan kemampuan meniru suara',
            'movement' => 'terbang dengan kepakan sayap kuat, juga pandai memanjat menggunakan paruh dan kakinya',
            'reproduction' => 'bertelur dua hingga lima butir setiap musim kawin',
            'habitat' => 'hutan hujan tropis, hutan kering, dan savana',
            'food' => 'buah-buahan, biji-bijian, kacang-kacangan, dan bunga',
            'predator' => 'ular, mamalia pemanjat, dan burung pemangsa lain'
        ],
        [
            'name' => 'Penguin',
            'type' => 'bird',
            'characteristics' => 'burung yang tidak bisa terbang, memiliki tubuh gemuk dengan sayap yang berubah menjadi sirip',
            'movement' => 'berenang dengan menggunakan sirip, berjalan dengan kaki pendek di daratan',
            'reproduction' => 'bertelur satu atau dua butir setiap musim kawin',
            'habitat' => 'daerah kutub dan sub-kutub, terutama di Antartika',
            'food' => 'ikan, cumi-cumi, dan krill',
            'predator' => 'anjing laut, hiu, dan burung laut besar seperti skua'
        ],
        [
            'name' => 'Hummingbird',
            'type' => 'bird',
            'characteristics' => 'burung kecil dengan kemampuan terbang di tempat, memiliki paruh panjang untuk menghisap nektar',
            'movement' => 'terbang dengan cepat dan dapat berdiam di satu tempat seperti helikopter',
            'reproduction' => 'bertelur dua butir setiap musim kawin',
            'habitat' => 'hutan hujan tropis, hutan pegunungan, dan taman',
            'food' => 'nektar bunga, serangga kecil, dan laba-laba',
            'predator' => 'burung pemangsa, ular, dan laba-laba besar'
        ],
        [
            'name' => 'Salmon',
            'type' => 'fish',
            'characteristics' => 'ikan yang dikenal dengan kemampuan migrasinya, memiliki tubuh ramping dan kuat',
            'movement' => 'berenang dengan cepat dan lincah, mampu melompat ke hulu sungai untuk bertelur',
            'reproduction' => 'bertelur ribuan butir setiap musim kawin',
            'habitat' => 'lautan, danau, dan sungai',
            'food' => 'serangga, plankton, dan ikan kecil',
            'predator' => 'beruang, burung pemangsa, dan manusia'
        ],
        [
            'name' => 'Clownfish',
            'type' => 'fish',
            'characteristics' => 'ikan kecil berwarna cerah, sering hidup di antara anemon laut',
            'movement' => 'berenang dengan cepat di sekitar anemon untuk mencari makanan dan perlindungan',
            'reproduction' => 'bertelur ratusan butir setiap musim kawin',
            'habitat' => 'terumbu karang di lautan tropis',
            'food' => 'zooplankton dan alga',
            'predator' => 'ikan predator besar dan manusia'
        ],
        [
            'name' => 'Shark',
            'type' => 'fish',
            'characteristics' => 'ikan besar dengan tubuh ramping dan kuat, memiliki deretan gigi tajam',
            'movement' => 'berenang dengan kekuatan besar dan kecepatan tinggi, dikenal sebagai pemangsa puncak',
            'reproduction' => 'bertelur atau melahirkan beberapa anak setiap musim kawin',
            'habitat' => 'lautan di seluruh dunia, dari perairan dangkal hingga dalam',
            'food' => 'ikan lain, mamalia laut, dan burung laut',
            'predator' => 'manusia, orca, dan kadang-kadang hiu lain'
        ],
        [
            'name' => 'Goldfish',
            'type' => 'fish',
            'characteristics' => 'ikan kecil berwarna emas atau oranye, sering dipelihara sebagai ikan hias',
            'movement' => 'berenang dengan gerakan lembut dan lincah',
            'reproduction' => 'bertelur ratusan hingga ribuan butir setiap musim kawin',
            'habitat' => 'kolam, akuarium, dan perairan tawar lainnya',
            'food' => 'serangga kecil, alga, dan pakan ikan',
            'predator' => 'burung pemangsa, kucing, dan ikan besar'
        ],
        [
            'name' => 'Betta Fish',
            'type' => 'fish',
            'characteristics' => 'ikan kecil dengan sirip panjang dan warna cerah, dikenal dengan sifat teritorialnya',
            'movement' => 'berenang dengan gerakan anggun, sering kali mengembangkan siripnya sebagai tanda agresi atau pamer',
            'reproduction' => 'bertelur ratusan butir setiap musim kawin, jantan menjaga telur',
            'habitat' => 'sungai, rawa, dan kolam di daerah tropis',
            'food' => 'serangga kecil, cacing, dan pakan ikan',
            'predator' => 'burung pemangsa, ikan predator, dan manusia'
        ],
        [
            'name' => 'Elephant',
            'type' => 'mammal',
            'characteristics' => 'mamalia darat terbesar dengan belalai panjang dan gading besar',
            'movement' => 'berjalan dengan langkah besar dan kuat, mampu berlari dengan kecepatan moderat',
            'reproduction' => 'melahirkan satu anak setiap 4-5 tahun',
            'habitat' => 'savana, hutan, dan padang rumput di Afrika dan Asia',
            'food' => 'rumput, daun, buah, dan kulit pohon',
            'predator' => 'manusia adalah ancaman utama, anak gajah dapat dimangsa oleh singa atau harimau'
        ],
        [
            'name' => 'Lion',
            'type' => 'mammal',
            'characteristics' => 'pemangsa besar dengan surai khas pada jantan, dikenal sebagai "raja hutan"',
            'movement' => 'berjalan dengan tenang, berlari cepat dalam jarak pendek untuk mengejar mangsa',
            'reproduction' => 'melahirkan 2-4 anak setiap 2-3 tahun',
            'habitat' => 'savana dan padang rumput di Afrika',
            'food' => 'mamalia besar seperti zebra, antelop, dan kerbau',
            'predator' => 'tidak memiliki predator alami, manusia adalah ancaman utama'
        ],
        [
            'name' => 'Dolphin',
            'type' => 'mammal',
            'characteristics' => 'mamalia laut yang cerdas dan sosial, memiliki tubuh ramping dan hidung panjang',
            'movement' => 'berenang dengan cepat dan anggun, sering melompat keluar dari air',
            'reproduction' => 'melahirkan satu anak setiap 2-3 tahun',
            'habitat' => 'lautan di seluruh dunia, dari perairan hangat hingga dingin',
            'food' => 'ikan kecil, cumi-cumi, dan krustasea',
            'predator' => 'hiu besar dan orca, manusia melalui aktivitas perikanan'
        ],
        [
            'name' => 'Kangaroo',
            'type' => 'mammal',
            'characteristics' => 'marsupial besar dengan kaki belakang kuat dan kantong untuk membawa anak',
            'movement' => 'melompat dengan kecepatan tinggi menggunakan kaki belakang yang kuat',
            'reproduction' => 'melahirkan satu anak setiap tahun, anak tinggal di kantong selama beberapa bulan',
            'habitat' => 'padang rumput, hutan terbuka, dan daerah semi-gurun di Australia',
            'food' => 'rumput, daun, dan tumbuhan',
            'predator' => 'dingo, elang, dan manusia'
        ],
        [
            'name' => 'Panda',
            'type' => 'mammal',
            'characteristics' => 'beruang besar dengan bulu hitam dan putih, dikenal dengan pola makan yang hampir seluruhnya bambu',
            'movement' => 'berjalan perlahan dan memanjat pohon dengan lincah',
            'reproduction' => 'melahirkan satu atau dua anak setiap dua tahun',
            'habitat' => 'hutan bambu di pegunungan Cina',
            'food' => 'bambu, tetapi juga makan buah, sayuran, dan kadang-kadang daging',
            'predator' => 'anak panda dapat dimangsa oleh macan tutul dan elang, manusia adalah ancaman utama'
        ]


    ];

    public function run(): void
    {
        foreach($this->animals as $val) {
            $type = Type::where('name', $val['type'])->first();
            $animal = Animal::where('name', $val['name'])->first();
            if(!$type || $animal) { continue; }
            Animal::create([
                'name' => $val['name'],
                'characteristics' => $val['characteristics'],
                'movement' => $val['movement'],
                'reproduction' => $val['reproduction'],
                'habitat' => $val['habitat'],
                'food' => $val['food'],
                'predator' => $val['predator'],
                'type_id' => $type->id,
            ]);
        }
    }
}
