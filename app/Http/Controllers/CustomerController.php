<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers=Customer::orderBy('id','DESC')->get();
        $data=['customers'=>$customers];
        return view('basic.customer.index',$data);
    }

    public function create()
    {
        return view('basic.customer.create');
    }

    public function edit($id)
    {
        $data = ['id' => $id];

        return view('basic.customer.edit', $data);
    }

    public function recall()
    {
        return view('basic.customer.index');
    }

}
