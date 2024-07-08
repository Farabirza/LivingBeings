<?php

namespace App;

class Logs
{
    protected $path;

    public function __construct($filename)
    {
        if(file_exists(storage_path('/logs/'.$filename))) {
            $this->path = fopen(storage_path('/logs/'.$filename), 'a');
        } else {
            $this->path = fopen(storage_path('/logs/'.$filename), 'w');
        }
    }

    public function write($time, $content)
    {
		fwrite($this->path, "\r\n" . $time . "\t" . $content ."\r\n");
    }

    public function __destruct()
    {
        fclose($this->path);
    }
}
