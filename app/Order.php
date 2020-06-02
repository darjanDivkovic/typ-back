<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'credentials',
        'adress',
        'phone',
        'bill',
    ];

    public $timestamps = false;
}
