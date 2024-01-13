<?php

namespace Modules\Store\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return ;
        // return \Modules\Store\Database\factories\UnitFactory::new();
    }
}
