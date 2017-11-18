<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('basic.customer.index');
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
