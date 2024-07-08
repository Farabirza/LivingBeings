<?php

namespace App\Models;

use App\Traits\GenerateUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory, GenerateUuid;

    protected $guarded = [ 'id' ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
