<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $products=Product::orderBy('id','DESC')->get();
        $data=['products'=>$products];
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
