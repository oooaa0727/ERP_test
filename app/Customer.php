<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    protected $fillable = [
        'cid','name', 'postal','address',
        'phone','fax','cellphone','email', 'TaxID'
    ];
}
