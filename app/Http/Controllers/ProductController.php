<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        return view('basic.product.index');
    }

    public function create()
    {
        return view('basic.product.create');
    }

    public function edit($id)
    {
        $data = ['id' => $id];

        return view('basic.product.edit', $data);
    }

    public function recall()
    {
        return view('basic.product.index');
    }
}
