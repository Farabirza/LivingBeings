<?php

namespace App\Models;

use App\Traits\GenerateUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory, GenerateUuid;

    protected $guarded = [ 'id' ];

    public function animal()
    {
        return $this->hasmany(Animal::class);
    }
}
