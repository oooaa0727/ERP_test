<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable = [
        'pid','name','spec','unit',
        'purchasePR','salesPR','sid',
        'inventory','safeStock','discontinued',
    ];
}

