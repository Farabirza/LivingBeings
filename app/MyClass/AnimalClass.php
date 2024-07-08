<?php

namespace App\MyClass;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use App\MyClass\Type\BirdType;
use App\MyClass\Type\MamaliaType;
use App\Logs;
use File;

class AnimalClass
{
    public function __construct()
    {
        $this->bird = new BirdType();
        $this->mamalia = new MamaliaType();
    }

    public function getDetail($type, $animal)
    {
        $log_filename = 'AnimalClassLog'.'_'.date('Y-m-d').'.log';
		$logs = new Logs($log_filename);
        $log_path = storage_path('logs/'.$log_filename);

        // if(File::exists($path)) {
        //     print_r('File exists');
        // } else {
        //     print_r('Doesnt exists');
        // }

        $response = isset($this->$type) ? $this->$type->getDetail(strtolower($animal)) : 'Jenis hewan ini belum terdaftar';
        $logs->write(date('Y-m-d h:i:s'), $response);

        // Send FTP Start
        $ftp_conn = ($conn = @ftp_connect(env('FTP_HOST'), env('FTP_PORT'))) ? true : false;
        if($ftp_conn) {
            $ftp_login = @ftp_login($conn, env('FTP_USER'), env('FTP_PASS'));
            if($ftp_login) {
                @ftp_set_option($conn, FTP_TIMEOUT_SEC, 60*5);
                @ftp_pasv($conn, true);
                if(@ftp_put($conn, '/ftp_home/text.log', $log_path, FTP_BINARY)) {
                    echo "File uploaded\r\n";
                } else {
                    echo "File upload failed\r\n";
                }
            }
        }
        ftp_close($conn);
        // Send FTP End

        return $response;
    }

    public function getAnimals($type)
    {
        $response = isset($this->$type) ? $this->$type->getAnimals() : 'Jenis hewan ini belum terdaftar';
        return $response;
    }
}
