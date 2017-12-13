<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table='manufacturers';
    protected $fillable = [
        'mid','name', 'POC','contact','postal','address',
        'phone','fax','cellphone','email', 'TaxID'
    ];
}
