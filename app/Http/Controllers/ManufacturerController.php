<?php

namespace App\Http\Controllers;
use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index(){
        $manufacturers=Manufacturer::orderBy('id','DESC')->get();
        $data=['manufacturers'=>$manufacturers];
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
