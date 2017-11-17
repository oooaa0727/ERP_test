<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'id','name', 'POC','contact','postal','address',
        'phone','fax','cell phone','email', 'TaxID'
    ];
/*
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'POC' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'postal' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'fax' => 'required|string|max:255',
            'cell phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'TaxID' => 'required|string|min:6|confirmed',
        ]);

    }

*/
}
