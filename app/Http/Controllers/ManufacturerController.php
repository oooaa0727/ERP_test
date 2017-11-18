<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index(){
        return view('basic.manufacturer.index');
    }

    public function create()
    {
        return view('basic.manufacturer.create');
    }

    public function edit($id)
    {
        $data = ['id' => $id];

        return view('basic.manufacturer.edit', $data);
    }

    public function recall()
    {
        return view('basic.manufacturer.index');
    }

}
