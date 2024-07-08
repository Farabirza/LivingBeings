<?php

namespace App\Console\Commands;

use App\MyClass\AnimalClass;
use Illuminate\Console\Command;

class AnimalCommand extends Command
{
    protected $signature = 'app:animal-command {type}';
    protected $description = 'Command description';
    public $AnimalClass;

    public function __construct()
    {
        parent::__construct();
        $this->AnimalClass = new AnimalClass();
    }

    public function handle()
    {
        $type = $this->argument('type');
        $animals = $this->AnimalClass->getAnimals(strtolower($type));
        print_r($animals);exit();
    }
}
