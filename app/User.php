<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /*use Notifiable;
public function Suppliers(){
    return $this->hasMany(Supplier::class);
}

    public function Products(){
        return $this->hasMany(Product::class);
    }

    public function Customers(){
        return $this->hasMany(Customer::class);
    }

    public function Manufacturers(){
        return $this->hasMany(Manufacturer::class);
    }
*/
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
