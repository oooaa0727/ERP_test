<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillabe = ['S_name','S_TaxID'
        ,'S_POC','S_contact','S_postal',
        'S_address','S_phone','S_cellphone',
        'S_fax','S_email' ];


}
