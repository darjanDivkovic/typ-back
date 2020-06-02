<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{

    protected $fillable = [
        'credentials',
        'item',
        'quantity',
    ];

    protected $table = "kitchen";

    public $timestamps = false;
}
